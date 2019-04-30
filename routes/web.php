<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});


$router->get('/celular', function () use ($router) {
    return "rodando do celular do inferno";
});

$router->get('/payments', function () use ($router) {
    $pagamento =  \App\Classes\Payment::all()->toJson();
    print_r($pagamento);

});

$router->get('/compra/retorno/{idcompra}', 'EcomController@renderizar');
$router->post('/compra/registrar', 'EcomController@registrar');


$router->get('/admin/', function () use ($router) {
    return view('smart_admin/login', ['app_name' => 'app de teste' , 'public' => '/adm/']);
});

/*
$router->get('/admin/home', function () use ($router) {
    return view('smart_admin/index', ['app_name' => 'app de teste' , 'public' => '/adm/']);
});*/

$router->get('/admin/home', 'AdminController@home');
$router->post('/admin/login', 'AdminController@login');
$router->get('/admin/preset', 'AdminController@preset');
$router->get('/admin/list/produtos', 'AdminController@list_produtos');
$router->get('/admin/produto/{id}', 'AdminController@view_produto');
$router->get('/admin/list/usuarios', 'AdminController@list_usuarios');
$router->get('/admin/list/lojas', 'AdminController@list_lojas');
//$router->get('/admin/list/pagamentos', 'AdminController@list_pagamentos');
$router->get('/admin/list/pagamentos', 'AdminController@list_pay');
$router->get('/admin/list/pagamentos/{shop}','AdminController@list_pagamentos_loja');
$router->get('/admin/pagamento/{id}', 'AdminController@view_pagamento');
$router->get('/admin/minhas/lojas', 'AdminController@minhas_lojas');
$router->get('/admin/listagem/{entidade}', 'AdminController@listagem');
$router->get('/admin/ver/loja/{id}', 'AdminController@ver_loja');
$router->get('/admin/ver/{entidade}/{id}', 'AdminController@ver');
$router->get('/admin/usuarios', 'AdminController@usuarios');

