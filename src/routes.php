<?php
use core\Router;

$router = new Router();

$router->get('/', 'HomeController@index'); //homecontroller é o nome da classe do controller e oq vem dps do @ é o método
$router->get('/novo', 'UsuariosController@add');
$router->post('/novo', 'UsuariosController@addAction');

$router->get('/usuario/{id}/editar', 'UsuariosController@edit');
$router->get('/novo', 'UsuariosController@add');

$router->post('/usuario/{id}/editar', 'UsuariosController@editAction');

$router->get('/usuario/{id}/excluir', 'UsuariosController@del');