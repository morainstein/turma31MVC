<?php

include_once __DIR__ . '/vendor/autoload.php';

$metodo = $_SERVER['REQUEST_METHOD'] ;
$caminho = $_SERVER['PATH_INFO'] ?? '/';

$requestRoute = $metodo . '|' . $caminho;


$routes = require __DIR__ . '/routes.php';


if(!array_key_exists($requestRoute, $routes)) {
  http_response_code(404);
}else{
  
  $resultado = $routes[$requestRoute];
  
  $controller = new $resultado[0]();
  $method = $resultado[1];
  
  $controller->$method();
}
