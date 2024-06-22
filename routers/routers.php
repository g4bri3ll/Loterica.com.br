<?php

use CoffeeCode\Router\Router;

$router = new Router("http://localhost/loteria.com.br");

$router->namespace("..\app\Http\Controllers");

$router->get("/", "Controller:index");
//$router->get("/jogoNuncaSaiu", "Controller:jogoNuncaSaiu");

//$router->group("ooops");
//$router->get("/{errcode}", "Controller:error");

$router->dispatch();

//if ($router->error()){
//    $router->redirect("/ooops/{$router->error()}");
//}
