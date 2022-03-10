<?php

require __DIR__ . '/vendor/autoload.php';
require __DIR__ . '/bootstrap/app.php';
require_once  __DIR__ . '/config/app.php';

Autoloader::register();

$router = new \Bramus\Router\Router();


require __DIR__ .'/routes/web.php';

$router->run();





