<?php

$router->get('/', function () use ($router) {
    echo "ambiente de testes :: benjamin-a-padaria";
});

$router->get('/select', function () use ($router) {
    return view('adm/select', ['app_name' => 'app de teste' , 'public' => '/adm/']);
});

$router->get('/selectunidade', function () use ($router) {
    return view('adm/selectunidade', ['app_name' => 'app de teste' , 'public' => '/adm/']);
});

$router->get('/pesquisa', function () use ($router) {
    return view('adm/pesquisa', ['app_name' => 'app de teste' , 'public' => '/adm/']);
});

$router->get('/pwa', function () use ($router) {
    return view('adm/pwa', ['app_name' => 'app de teste' , 'public' => '/adm/']);
});

$router->get('/unidade/{unidade}', function ($unidade) use ($router) {
    return view('adm/unidade', ['unidade' => $unidade , 'public' => '/adm/']);
});

$router->get('/termos', function () use ($router) {
    return view('client/termos', ['app_name' => 'app de teste' , 'public' => '/adm/']);
});

$router->get('/privacidade', function () use ($router) {
    return view('client/termos', ['app_name' => 'app de teste' , 'public' => '/adm/']);
});

$router->get('/client/', function () use ($router) {
    return view('client/index', ['app_name' => 'app de teste' , 'public' => '/adm/']);
});

$router->get('/client/qrunidade', function () use ($router) {
     return view('client/readqr');
});

$router->get('/client/select', function () use ($router) {
    return view('client/select', ['app_name' => 'app de teste' , 'public' => '/adm/']);
});


$router->get('/client/history/{id}', function ($id) use ($router) {
     return view('client/history', ['usuario' => $id,'cliente' => $id]);
});

$router->get('/client/historytest/{id}', function ($id) use ($router) {
     return view('client/historytest', ['usuario' => $id,'cliente' => $id]);
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

$router->get('/client/lojatest/{loja}/{cliente}', function ($loja, $cliente) use ($router) {
     return view('client/lojatest', ['loja' => $loja, 'cliente' => $cliente]);
});

$router->get('/client/carrinho/{loja}/{cliente}', function ($loja, $cliente) use ($router) {
	$now = new DateTime();
	$hoje = $now->getTimestamp();
    return view('client/carrinho', ['loja' => $loja, 'cliente' => $cliente , 'hoje' => $hoje]);
});

$router->get('/caixa/select', function () use ($router) {
     return view('caixa/select', ['loja' => 'caixa']);
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

$router->post('/caixa/cobrar', function () use ($router) {
    // return view('caixa/cobrancas', ['loja' => $loja]);

    $postdata = file_get_contents("php://input");
    $request = json_decode($postdata , true);

    $nome = $request['nome'];
    $cartao = $request['cartao'];
    $valor = $request['valor'];
 

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
    if ($transaction->getReturnCode() == '00') {
        printf("Transação autorizada com sucesso; tid=%s\n", $transaction->getTid());
    }else{
        var_dump($transaction);
    }
});


$router->get('/adm/cardapio', function () use ($router) {
    return view('adm/cardapio', ['app_name' => 'app de teste' , 'public' => '/adm/']);
});
