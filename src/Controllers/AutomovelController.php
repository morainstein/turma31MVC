<?php

namespace Morainstein\Mvc\Controllers;

class AutomovelController {

  public function index() {
    echo "Lista de automóveis...";
  }

  public function show() {
    echo "Detalhes do automóvel {$_GET['id']}...";
  }

  public function store() {
    echo "Criando um novo automóvel...";
  }

  public function delete() {
    echo "Deletando o automóvel {$_GET['id']}...";
  }
}