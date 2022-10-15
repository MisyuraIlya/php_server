<?php

require_once __DIR__.'/../vendor/autoload.php';

$router = new \App\Router();
//$router->register('/', function(){
//    echo 'Home';
//});
//$router->register('/invoces', function(){
//    echo 'Invoces';
//});

$router
    ->register('/',[App\Classes\HomeController::class,'index'])
    ->register('/invoices',[App\Classes\InvoiceController::class,'index'])
    ->register('/invoices/create',[App\Classes\InvoiceController::class,'create']);

$router->resolve($_SERVER['REQUEST_URI']);