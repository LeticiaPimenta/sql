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
/*
$router->get('/', function () use ($router) {
	$app_name = env('APP_NAME', 'site');
	//$app_view = env('APP_VIEW', 'site');
   // return view($app_view.'/index', ['app_name' => $app_name]);
	echo $app_name;
});
*/

$router->get('/log', function () use ($router) {
    
       
        print_r(file_get_contents('../storage/logs/lumen.log'));
});


$router->get('/', 'BenjaminClientController@pwa');

$router->get('/app/new_user', function () use ($router) {
	//$app_name = env('APP_NAME', 'site');
	//$app_view = env('APP_VIEW', 'site');
    return view($app_view.'/index', ['app_name' => $app_name]);
	
});

$router->get('produtos', 'BenjaminClientController@produtos');//mockada
$router->get('ler_combos', 'BenjaminClientController@ler_combos');//mockada
$router->get('produtos_id', 'BenjaminClientController@produtos_id');//mockada
$router->get('produtos/campanha/{nome}', 'BenjaminClientController@produtos_campanha');//mockada

$router->get('produtos/campanha_nome/{nome}', 'BenjaminClientController@produtos_campanha_nome');//mockada

$router->get('/preloading', 'BenjaminClientController@preloading');
$router->get('/pwa', 'BenjaminClientController@pwa');
$router->get('/beta', 'BenjaminClientController@beta');
$router->get('/login', 'BenjaminClientController@login');
$router->get('/termos', 'BenjaminClientController@termos');
$router->post('/logar', 'BenjaminClientController@logar');
$router->get('/registrar', 'BenjaminClientController@registrar');
$router->get('/indicado/{amigo}', 'BenjaminClientController@indicado');
$router->get('/benamigo/{amigo}', 'BenjaminClientController@adicionar_amigo');
$router->post('/client/descontar_wallet', 'BenjaminClientController@descontar_wallet');

$router->get('/client/leramigo/{loja}','BenjaminClientController@ler_amigo');
$router->post('/client/amigotransferir','BenjaminClientController@amigotransferir');
$router->post('/client/fazertransferencia','BenjaminClientController@fazertransferencia');
$router->post('/registrar_usuario', 'BenjaminClientController@registrar_usuario');
$router->get('client/qrunidade', 'BenjaminClientController@qrunidade');
$router->get('client/select', 'BenjaminClientController@select');
$router->get('client/favoritos', 'BenjaminClientController@favoritos');
$router->get('client/cardapio/{loja}', 'BenjaminClientController@cardapio');
$router->get('client/creditos/{loja}', 'BenjaminClientController@creditos');
$router->get('client/combos/{loja}', 'BenjaminClientController@combos');
$router->get('client/campanha/{nome}/{loja}/{cliente}', 'BenjaminClientController@campanha');
$router->get('client/campanha/{nome}/{loja}', 'BenjaminClientController@campanha_nome');
$router->get('client/carrinho/{loja}', 'BenjaminClientController@carrinho');
$router->get('client/creditar', 'BenjaminClientController@creditar');
$router->get('client/historico/{cliente}/{loja}', 'BenjaminClientController@historico');
$router->get('client/perfil/{loja}', 'BenjaminClientController@perfil');

$router->get('attendant', 'BenjaminAttendantController@select');
$router->get('attendant/{unidade}', 'BenjaminAttendantController@unidade');
$router->get('attendant/pedidos/{unidade}/{colaborador}', 'BenjaminAttendantController@pedidos');
$router->get('attendant/atender/{unidade}/{colaborador}', 'BenjaminAttendantController@atender');


$router->post('/caixa/cobrar', function () use ($router) {
    // return view('caixa/cobrancas', ['loja' => $loja]);

    $postdata = file_get_contents("php://input");
    $request = json_decode($postdata , true);



    $nome = $request['nome'];
    $cartao = $request['cartao'];
    $valor = $request['valor'];
    $shop = $request['loja'];
    $user = $request['user_token'];
 
/*
    $environment = \Rede\Environment::sandbox();
    // Configuração da loja
    $store = new \Rede\Store('10002466', '0556abce8ba144c787f9dad825a35bd2',$environment);
    // Transação que será autorizada
    $transaction = (new \Rede\Transaction($valor, 'pedido' . time()))->creditCard(
        $request['cartao'],
        '235',
        '12',
        '2020',
        $nome
    );

    // Autoriza a transação
    $transaction = (new \Rede\eRede($store))->create($transaction);
    if ($transaction->getReturnCode() == '00') {*/

        $tid = time();
        printf("Transação autorizada com sucesso; tid=%s\n", $tid);

        $pagamento =  new \App\Payment;
        $pagamento->name = $nome;
        $pagamento->shop = $shop;
        $pagamento->user = $user;
        $pagamento->type = 1;
        $pagamento->total = $valor;
        $pagamento->tid =  $tid;
        $pagamento->save();
        
   /* }else{
        var_dump($transaction);
    }*/
});

$router->post('/caixa/cobrarvoucher', function () use ($router) {
    // return view('caixa/cobrancas', ['loja' => $loja]);

    $postdata = file_get_contents("php://input");
    $request = json_decode($postdata , true);

    $nome = $request['nome'];
    $cartao = $request['cartao'];
    $valor = $request['valor'];
    $shop = $request['loja'];
    $user = $request['user_token'];
 
/*
    $environment = \Rede\Environment::sandbox();
    // Configuração da loja
    $store = new \Rede\Store('10002466', '0556abce8ba144c787f9dad825a35bd2',$environment);
    // Transação que será autorizada
    $transaction = (new \Rede\Transaction($valor, 'pedido' . time()))->creditCard(
        $request['cartao'],
        '235',
        '12',
        '2020',
        $nome
    );

    // Autoriza a transação
    $transaction = (new \Rede\eRede($store))->create($transaction);
    if ($transaction->getReturnCode() == '00') {*/

        $tid = time();
        printf("Transação autorizada com sucesso; tid=%s\n", $tid);

        $pagamento =  new \App\Payment;
        $pagamento->name = $nome;
        $pagamento->shop = $shop;
        $pagamento->user = $user;
        $pagamento->type = 1;
        $pagamento->total = $valor;
        $pagamento->tid =  $tid;
        $pagamento->save();

        $receiver =  \App\User::where('user_token',$user)->first();
        $receiver->wallet = $receiver->wallet+$valor;
        $receiver->save();
        
   /* }else{
        var_dump($transaction);
    }*/
});

$router->get('caixa', 'BenjaminPdvController@index');
$router->get('caixa/list/pagamentos', 'BenjaminPdvController@listar_pagamentos');
$router->get('caixa/list/notas', 'BenjaminPdvController@listar_notas');
$router->get('caixa/pagamentos', 'BenjaminPdvController@pagamentos');
$router->get('caixa/paypal', 'BenjaminPdvController@paypal');
$router->get('caixa/nfe/{pagamento}', 'BenjaminPdvController@registrar_nfe');
$router->post('caixa/bater_nota', 'BenjaminPdvController@bater_nota');
$router->get('caixa/nota/{pagamento}', 'BenjaminPdvController@ver_nota');

//$router->get*()


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

$router->get('/app/', function () use ($router) {
    return view('app', ['app_name' => 'app de teste']);
});

$router->get('/api/', function () use ($router) {
    return 'retorno do teste de api';
});

$router->get('/site/', function () use ($router) {
    return 'retorno do teste de api';
});

//vamos deixar exemplos de funcionalidades aqui
$router->get('/lab/', function () use ($router) {
    return 'retorno do teste de api';
});



//$router->get('admin/home', 'AdminController@home');




/**
 * fazer uma funcao pra habilitar o rest por config :: "group,user" 
 */


$router->get('group', 'GroupsController@all');
$router->get('group/{id}', 'GroupsController@get');
$router->post('group', 'GroupsController@add');
$router->put('group/{id}', 'GroupsController@put');
$router->delete('group/{id}', 'GroupsController@remove');
