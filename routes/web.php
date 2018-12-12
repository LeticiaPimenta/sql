<?php

$router->get('/', function () use ($router) {
    echo "ambiente de testes :: benjamin-a-padaria";
});

$router->get('/select', function () use ($router) {
    return view('adm/select', ['app_name' => 'app de teste' , 'public' => '/adm/']);
});

$router->get('/unidade/{unidade}', function ($unidade) use ($router) {
    return view('adm/unidade', ['unidade' => $unidade , 'public' => '/adm/']);
});

$router->get('/client/', function () use ($router) {
    return view('client/index', ['app_name' => 'app de teste' , 'public' => '/adm/']);
});

$router->get('/client/history/{id}', function ($id) use ($router) {
     return view('client/history', ['usuario' => $id,'cliente' => $id]);
});

$router->get('/client/cardapio', function () use ($router) {
    return view('client/cardapio', ['app_name' => 'app de teste' , 'public' => '/adm/']);
});

$router->get('/client/produtos', function () use ($router) {
    return view('client/produtos', ['app_name' => 'app de teste' , 'public' => '/client/']);
});

$router->get('/client/cardapio/{loja}/{cliente}', function ($loja, $cliente) use ($router) {
     return view('client/loja', ['loja' => $loja, 'cliente' => $cliente]);
});

$router->get('/client/carrinho/{loja}/{cliente}', function ($loja, $cliente) use ($router) {
	$now = new DateTime();
	$hoje = $now->getTimestamp();
    return view('client/carrinho', ['loja' => $loja, 'cliente' => $cliente , 'hoje' => $hoje]);
});

$router->get('/caixa/loja/{loja}', function ($loja) use ($router) {
     return view('caixa/loja', ['loja' => $loja]);
});

$router->get('/caixa/pedidos/{loja}', function ($loja) use ($router) {
     return view('caixa/pedidos', ['loja' => $loja]);
});

$router->get('/caixa/cobrancas/{loja}', function ($loja) use ($router) {
     return view('caixa/cobrancas', ['loja' => $loja]);
});

$router->get('/adm/cardapio', function () use ($router) {
    return view('adm/cardapio', ['app_name' => 'app de teste' , 'public' => '/adm/']);
});
