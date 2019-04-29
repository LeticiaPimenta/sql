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
