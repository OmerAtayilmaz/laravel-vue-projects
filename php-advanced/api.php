<?php
require 'vendor/autoload.php';

$app=\Slim\Factory\AppFactory::create();


$app->get("/hi",function($req,$res,$args){
    return "Hello World!";
});

$app->run();