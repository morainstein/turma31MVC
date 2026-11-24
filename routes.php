<?php

return [
  'GET|/usuarios' => [Morainstein\Mvc\Controllers\UsuarioController::class, 'index'],
  'GET|/usuario' => [Morainstein\Mvc\Controllers\UsuarioController::class, 'show'],
  'POST|/usuario' => [Morainstein\Mvc\Controllers\UsuarioController::class, 'store'],
  'GET|/usuario/delete' => [Morainstein\Mvc\Controllers\UsuarioController::class, 'delete'],
  'GET|/usuario/update' => [Morainstein\Mvc\Controllers\UsuarioController::class, 'update'],

  'GET|/automoveis' => [Morainstein\Mvc\Controllers\AutomovelController::class, 'index'],
  'GET|/automovel' => [Morainstein\Mvc\Controllers\AutomovelController::class, 'show'],
  'POST|/automovel' => [Morainstein\Mvc\Controllers\AutomovelController::class, 'store'],
  'GET|/automovel/delete' => [Morainstein\Mvc\Controllers\AutomovelController::class, 'delete'],
];
