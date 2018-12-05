<?php

$router->get('/', function () use ($router) {
    echo "Benjamin Lab";
});

$router->get('/client/', function () use ($router) {
    return view('client/index', ['app_name' => 'app de teste' , 'public' => '/adm/']);
});

$router->get('/client/cardapio', function () use ($router) {
    return view('client/cardapio', ['app_name' => 'app de teste' , 'public' => '/adm/']);
});

$router->get('/client/cardapio/{loja}/{cliente}', function ($loja, $cliente) use ($router) {
     return view('client/loja', ['loja' => $loja, 'cliente' => $cliente]);
});

$router->get('/client/carrinho/{loja}/{cliente}', function ($loja, $cliente) use ($router) {
    return view('client/carrinho', ['loja' => $loja, 'cliente' => $cliente]);
});

$router->get('/caixa/loja/{loja}', function ($loja) use ($router) {
     return view('caixa/loja', ['loja' => $loja]);
});


$router->get('/adm/cardapio', function () use ($router) {
    return view('adm/cardapio', ['app_name' => 'app de teste' , 'public' => '/adm/']);
});
