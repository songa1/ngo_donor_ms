<?php

// require_once __DIR__.'/vendor/autoload.php';
require_once './core/Application.php';

$app = new Application();

$router = new Router();

$app->router->get('/', function (){
    return "Hello World!";
});

$app->router->get('/register', function (){
    return "register page";
});

$app->run();

?>