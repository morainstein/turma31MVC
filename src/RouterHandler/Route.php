<?php

namespace Morainstein\Mvc\RouterHandler;

use Morainstein\Mvc\Controllers\Controller;
use Morainstein\Mvc\Controllers\ControllerException;

class Route
{
    private string $controllerMethod;
    private Controller $controller;

    public function __construct(string $controller, string $controllerMethod)
    {
      $controller = new $controller();

      if(!$controller instanceof Controller){
        throw new ControllerException("O controller não é um Controller",1);
        
      }

      $this->controller = $controller;
      $this->controllerMethod = $controllerMethod;
    }

    public function realize()
    {
      $controllerMethod = $this->controllerMethod;
      $controller = $this->controller;
      $controller->$controllerMethod();
    }
}