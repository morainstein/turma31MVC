<?php

use Morainstein\Mvc\RouterHandler\Router;

Router::get('/caminho', [Morainstein\Mvc\Controllers\UsuarioController::class, 'index']);
Router::post('/usuario', [Morainstein\Mvc\Controllers\UsuarioController::class, 'store']);

Router::get('/exemplo', [Morainstein\Mvc\Controllers\UsuarioController::class, 'exemplo']);

Router::get('/usuario' ,[Morainstein\Mvc\Controllers\UsuarioController::class, 'show']);
Router::get('/usuario/delete',[Morainstein\Mvc\Controllers\UsuarioController::class, 'delete']);
Router::get('/usuario/update',[Morainstein\Mvc\Controllers\UsuarioController::class, 'update']);
Router::get('/automoveis',[Morainstein\Mvc\Controllers\AutomovelController::class, 'index']);
Router::get('/automovel',[Morainstein\Mvc\Controllers\AutomovelController::class, 'show']);
Router::post('/automovel',[Morainstein\Mvc\Controllers\AutomovelController::class, 'store']);
Router::get('/automovel/delete',[Morainstein\Mvc\Controllers\AutomovelController::class, 'delete']);
