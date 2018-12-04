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
     //print_r($loja);
    //print_r($cliente);
     return view('client/loja', ['loja' => $loja, 'cliente' => $cliente]);
});


$router->get('/adm/cardapio', function () use ($router) {
    return view('adm/cardapio', ['app_name' => 'app de teste' , 'public' => '/adm/']);
});
