<?php

namespace app\Controller;

use app\Resources\Customer;

class IndexController extends Controller
{

    public function index()
    {
        $this->view('index');
    }

    public function processFile(){

        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            if(is_uploaded_file($_FILES['file']['tmp_name'])){
                $filename = basename($_FILES['file']['name']);
                if(substr($filename, -3) == 'csv'){
                    $tmpfile = $_FILES['file']['tmp_name'];
                    if (($file = file($tmpfile)) !== FALSE) {

                        $customers = new Customer($file);

                        $this->view('card',
                            [
                                'items' => $customers->getData()
                            ]
                        );
                    }
                }
                else{
                    $this->view('error', ['text' => 'Invalid file format uploaded. Please upload CSV.']);
                }
            }
            else{
                $this->view('error', ['text' => 'Please upload a CSV file.']);
            }
        }
        die();
    }


}
