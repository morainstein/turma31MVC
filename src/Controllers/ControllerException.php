<?php

namespace Morainstein\Mvc\Controllers;

use Exception;

class ControllerException extends Exception
{
  public function __construct($message = "Controller não encontrado", $code = 1001) {
    parent::__construct($message, $code);
  }
}