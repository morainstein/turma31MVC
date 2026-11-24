<?php

namespace Morainstein\Mvc\Controllers;

class UsuarioController implements Controller
{

  public function index() {
    echo "Lista de usuários...";
  }

  public function show() {
    echo "Detalhes do usuário " . $_GET['id'] . "...";
  }

  public function store() {
    echo "Criando um novo usuário...";
  }

  public function update() {
    echo "Atualizando o usuário " . $_GET['id'] . "...";
  }

  public function exemplo() {
    echo "rota de exemplo";
  }
}