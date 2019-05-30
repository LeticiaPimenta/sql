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




$router->get('/ler', function () use ($router) {
	$FIREBASE = "https://benjamin-a-padaria.firebaseio.com/users/7683a66bb9f308d716cdf8c0cebebc23/retirar/-Ldg9-I76TLSdwVFR02E/";
	$NODE_GET = "products.json";
	$curl = curl_init();
	curl_setopt( $curl, CURLOPT_URL, $FIREBASE . $NODE_GET );
	curl_setopt( $curl, CURLOPT_RETURNTRANSFER, true );
	$response = curl_exec( $curl );
	curl_close( $curl );
	$produtos = json_decode($response);
	foreach ($produtos as $key => $produto) {
		if(isset($produto->CODE)){
			print_r($key);
			echo "<br>";
			print_r($produto->CODE);
			echo "<hr>";	
		}
	}
});

$router->get('/apaga', function () use ($router) {
    


// Constants
$FIREBASE = "https://benjamin-a-padaria.firebaseio.com/users/7683a66bb9f308d716cdf8c0cebebc23/retirar/-Ldg9-I76TLSdwVFR02E/products/";
$NODE_DELETE = "2.json";
$NODE_GET = "temperature.json";
$NODE_PATCH = ".json";
$NODE_PUT = "temperature.json";

// Data for PUT
// Node replaced
$data = 32;

// Data for PATCH
// Matching nodes updated
$data = array(
    "temperature" => 42
);

// JSON encoded
$json = json_encode( $data );

// Initialize cURL
$curl = curl_init();

// Create
// curl_setopt( $curl, CURLOPT_URL, $FIREBASE . $NODE_PUT );
// curl_setopt( $curl, CURLOPT_CUSTOMREQUEST, "PUT" );
// curl_setopt( $curl, CURLOPT_POSTFIELDS, 32 );

// Read
// curl_setopt( $curl, CURLOPT_URL, $FIREBASE . $NODE_GET );

// Update
/*curl_setopt( $curl, CURLOPT_URL, $FIREBASE . $NODE_PATCH );
curl_setopt( $curl, CURLOPT_CUSTOMREQUEST, "PATCH" );
curl_setopt( $curl, CURLOPT_POSTFIELDS, $json );
*/
// Delete
 curl_setopt( $curl, CURLOPT_URL, $FIREBASE . $NODE_DELETE );
 curl_setopt( $curl, CURLOPT_CUSTOMREQUEST, "DELETE" );

// Get return value
curl_setopt( $curl, CURLOPT_RETURNTRANSFER, true );

// Make request
// Close connection
$response = curl_exec( $curl );
curl_close( $curl );

// Show result
echo $response . "\n";


});

$router->get('/payments', function () use ($router) {
    $pagamento =  \App\Classes\Payment::all()->toJson();
    print_r($pagamento);

});

$router->post('/carregar_dados', function () use ($router) {
	header('Content-Type: application/json'); 
    $usuario =  \App\User::where('email',$_POST['email'])->get()->first();
    if (isset($usuario)) {
	    $usuario->password = '*********';
	    $amigos =  new \App\Classes\BenAmigo;
	    $meus_amigos = $amigos->listar_amigos($usuario->user_token );

	    $response = array('response' => true , 'usuario' => $usuario->toJson(), 'amigos' => $meus_amigos);
	    echo json_encode($response);
    }else{
	    $response = array('response' => false , 'usuario' => null);
	    echo json_encode($response);
    }



});

$router->get('/compra/retorno/{idcompra}', 'EcomController@renderizar');
$router->get('/voucher/retorno/{idcompra}', 'EcomController@renderizar_voucher');
$router->get('/conectar/{id_amigo}/{id_user}', 'EcomController@conectar');
$router->post('/compra/registrar', 'EcomController@registrar');
$router->post('/voucher/registrar', 'EcomController@voucher_registrar');
$router->post('/registrar_usuario', 'EcomController@registrar_usuario');
$router->post('/compra/retirar', 'EcomController@retirar');




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

