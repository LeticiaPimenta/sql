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
    echo "Benjamin Lab";
});

$router->get('/client/', function () use ($router) {
    return view('client/index', ['app_name' => 'app de teste' , 'public' => '/adm/']);
});
