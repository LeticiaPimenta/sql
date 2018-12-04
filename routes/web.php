<?php

$router->get('/', function () use ($router) {
    echo "Benjamin Lab";
});

$router->get('/client/', function () use ($router) {
    return view('client/index', ['app_name' => 'app de teste' , 'public' => '/adm/']);
});
