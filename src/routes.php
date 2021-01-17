<?php
use core\Router;

$router = new Router();
//Rota para a pagina principal
$router->get('/', 'HomeController@index');
//Rotas para adicionar informações
$router->get('/novo', 'UsuariosController@add');
$router->post('/novo', 'UsuariosController@addAction');
//Rotas para editar informações
$router->get('/usuario/{id}/editar', 'UsuariosController@edit');
$router->post('/usuario/{id}/editar', 'UsuariosController@editAction');
//Rotas para deletar informações
$router->get('/usuario/{id}/excluir', 'UsuariosController@del');
$router->post('/usuario/{id}/excluir', 'UsuariosController@');