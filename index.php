<?php

require __DIR__ . "/vendor/autoload.php";

use CoffeeCode\Router\Router;

$router = new Router("http://localhost/loteria.com.br");

$router->namespace("App\Http\Controllers");

//$router->get("/", "Controller:index");
$router->get("/", function ($data){
    echo "teste";
});


$router->group("ooops");
$router->get("/{errcode}", "Controller:error");

$router->dispatch();

if ($router->error()){
    $router->redirect("/ooops/{$router->error()}");
}
