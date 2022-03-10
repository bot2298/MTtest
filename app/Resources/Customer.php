<?php

namespace app\Resources;

use app\Helpers\Geonames;
use app\Helpers\IPStack;


class Customer {

    use Geonames, IPStack;

    protected $file;

    protected array $keys = [ 'id', 'date', 'duration', 'number', 'ip'];

    public function __construct($file){
        $this->file = $file;
    }

    public function getData(): array
    {

        $codes = $this->getCodesByPhone();

        foreach ($this->file as $line) {
            $customer = explode(',', $line);
            $customer = array_combine($this->keys, $customer);
            $customer['continent_code_ip'] = $this->getInfoByIp($customer['ip'])  ?? null;

            foreach ($codes as $code){
                if (stripos($customer['number'], $code['phoneCode']) === 0){
                    $customer['continent_code_phone'] = $code['ISO'];
                    break;
                }
            }

            $list[] = $customer;

        }

        if (isset($list)){
            foreach (collect($list)->groupBy('id') as $key => $client){
                $onContinent  = $client->filter(function ($item){
                    return $item['continent_code_phone'] == $item['continent_code_ip'];
                });

                $result [] = [
                    'id' => $key,
                    'totalCalls' => $client->count(),
                    'totalDuration' => $client->sum('duration'),
                    'totalCallsContinent' => $onContinent->count(),
                    'totalDurationContinent' => $onContinent->sum('duration')
                ];

            }
        }

        return $result ?? [];

    }
}
