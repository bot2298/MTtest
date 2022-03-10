<?php


$router->get('/','App\Controller\IndexController@index');
$router->post('/processFile','App\Controller\IndexController@processFile');

$router->get('test','App\Controller\IndexController@test');

$router->set404(function() {
    header('HTTP/1.1 404 Not Found');
    // ... do something special here
});
