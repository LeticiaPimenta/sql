<?php

namespace App\Http\Controllers;

class EcomController extends Controller
{

    public function carrinho()
    {
        echo 'Jockey';
    }

    public function retorno($idcompra){
      @print_r($_SERVER['HTTP_REFERER']);
        @$server = implode('-', $_SERVER);
        @$dados = implode('-', $_GET);
        @$dados = $idcompra.'::'.$dados;
        //print_r($dados);
        @file_put_contents('retorno.txt',$server.' - '.$dados);
   // print_r($request->all());
        echo 'Compra realizada com sucesso Ben-Facil';
    }

    public function conectar($id_amigo , $id_user){
        //print_r($id_amigo);
        $benamigo = new \App\Classes\BenAmigo;

        $benamigo->conectar_benamigos($id_amigo , $id_user);

        $eu_ben_amigo = \App\User::where('user_token',$id_amigo)->first()->toArray();
        $resposta = array('nome' => $eu_ben_amigo['name'], 'email' => $eu_ben_amigo['email']);
        //echo "Agora vc é amigo do usuario";
        //echo json_encode($resposta);
        $usuario = \App\User::where('user_token',$id_user)->first();
        echo '{"name":"'.$usuario->name.'", "response":"OK"}';
    }

    public function renderizar($idcompra){
        return view('benjamin/client/retorno', ['app_name' => 'app de teste' , 'public' => '/adm/']);
    }

    public function confirma(){
        header('Content-Type: application/json'); 

        $postdata = file_get_contents("php://input");
        $dados = json_decode($postdata , true);


        $usuario = \App\User::where('user_token',$dados['user_token'])->first();
        //print_r($usuario->wallet);
        $msg = "";
        $response = 0;


        if($usuario->wallet >= $dados['total_descontos']){
            $usuario->wallet = $usuario->wallet - $dados['total_descontos'];
            $usuario->save();
            $response = 1;
            $msg = "descontado";
        }else{
            $response = 0;
            $msg = "nao conseguimos descontar o valor";
        }
        echo '{"response":'.$response.', "total":'.$usuario->wallet.' , "descontos":'.$dados['total_descontos'].' , "msg":"'.$msg.'"}';
    }

    public function renderizar_voucher($idcompra){
        return view('benjamin/client/retorno_voucher', ['app_name' => 'app de teste' , 'public' => '/adm/']);
    }

    public function voucher_retorno($idcompra){
        echo $idcompra;
    }

    public function presentear_amigo(){
        header('Content-Type: application/json'); 
        $postdata = file_get_contents("php://input");
        $dados = json_decode($postdata , true);
        //print_r($postdata);

        $produto = explode('@', $dados['presente_selecionado']);

        $url_presente = "https://benjamin-a-padaria.firebaseio.com/users/".$dados['user_email']."/retirar/".$produto[0]."/products/".$produto[1].".json" ;
        $curl = curl_init();
        curl_setopt( $curl, CURLOPT_URL, $url_presente);
        curl_setopt( $curl, CURLOPT_RETURNTRANSFER, true );
        $response = curl_exec( $curl );
        curl_close( $curl );

        $timestamp = (new \DateTime())->getTimestamp();
        $url_presente_amigo = "https://benjamin-a-padaria.firebaseio.com/users/".$dados['amigo_selecionado']."/retirar/".$timestamp.".json";

        $curl = curl_init();
        curl_setopt( $curl, CURLOPT_URL, $url_presente_amigo);
        curl_setopt( $curl, CURLOPT_CUSTOMREQUEST, "PUT" );
        curl_setopt( $curl, CURLOPT_POSTFIELDS, $response );
        curl_setopt( $curl, CURLOPT_RETURNTRANSFER, true );
        $response = curl_exec( $curl );
        curl_close( $curl );



        $curl = curl_init();
        curl_setopt( $curl, CURLOPT_URL, $url_presente );
        curl_setopt( $curl, CURLOPT_CUSTOMREQUEST, "DELETE" );
        curl_setopt( $curl, CURLOPT_RETURNTRANSFER, true );
        curl_exec( $curl );
        curl_close( $curl );
        
        $url_presente_retirar = "https://benjamin-a-padaria.firebaseio.com/users/".$dados['user_email']."/retirar.json" ;
        $curl = curl_init();
        curl_setopt( $curl, CURLOPT_URL, $url_presente_retirar);
        curl_setopt( $curl, CURLOPT_RETURNTRANSFER, true );
        $response = curl_exec( $curl );
        curl_close( $curl );

        print_r($response);

    }


    public function fazertransferencia()
    {
        header('Content-Type: application/json'); 
        $postdata = file_get_contents("php://input");
        $request = json_decode($postdata , true);
        $user_token = $request['client_token'];

        //print_r($request);
        //echo $request['valor_transferencia'];
        $me =  \App\User::where('user_token',$user_token)->first();
        //print_r($me);

        $amigo =  \App\User::where('user_token',$request['user_token'])->first();
        //print_r($amigo);

        $transfer = new \App\Classes\Transfer;
        $retorno = $transfer->transfere($me->id , $amigo->id , $request['valor_transferencia']);

        echo json_encode($retorno);

    }

    public function perfil(){
        return view('benjamin/client/perfil', ['app_name' => 'app de teste' , 'public' => '/adm/']);
    }

    public function registrar(){
        header('Content-Type: application/json'); 
        $json = file_get_contents('php://input');
        $data = json_decode($json);
        $pagamento = new \App\Classes\Payment;

        //echo '{"name":"-LdcBFf0rhGBqu23Kvbj"}';
        $pagamento->register($json);
        die();
        //return $pagamento->register($json);
        //return view('benjamin/client/retorno', ['app_name' => 'app de teste' , 'public' => '/adm/']);
    }

    public function voucher_registrar(){
        header('Content-Type: application/json'); 
        $json = file_get_contents('php://input');
        $data = json_decode($json);
      // print_r($data);
       $receiver =  \App\User::where('user_token',$data->user)->first();
        $receiver->wallet = $receiver->wallet+$data->cart;
        $receiver->save();
        echo '{"response":"OK"}';
        die();
        //return $pagamento->register($json);
        //return view('benjamin/client/retorno', ['app_name' => 'app de teste' , 'public' => '/adm/']);
    }

    public function registrar_usuario(){
        header('Content-Type: application/json'); 
        $json = file_get_contents('php://input');
        $data = json_decode($json, true);
        //$pagamento = new \App\Classes\Payment;
        $_POST = $data['usuario'];

          if(!isset($_POST['name'])){
            $resposta  = array('mensagem' => "Nome de usuario não pode ser vazio" , 'status' => 0 , 'usuario'=>'');
            return response()->json($resposta);
        }

  
        try{
            if(! \App\User::where('email',$_POST['email'])->first()){
                $usuario = new \App\User;
                $usuario->name = $_POST['name'];
                $usuario->email = $_POST['email'];
                if(isset($_POST['parent']))
                    $usuario->parent_user = $_POST['parent'];
                $usuario->user_token = md5($_POST['email']);
                $usuario->logado = 0;
                $usuario->wallet = 0;
                $usuario->group_id = 4;
                $usuario->password = $_POST['password'];
                
                $usuario->save();
                $usuario->password = "********";
               // print_r($usuario->toJson(JSON_PRETTY_PRINT));
                $resposta  = array('mensagem' => 'O Usuario registrado com sucesso', 'status' => 1 , 'usuario'=>$usuario );
                //return true;
            }else{
                $usuario = \App\User::where('email',$_POST['email'])->first();
               
                //$usuario->save();
                $resposta  = array('mensagem' => 'O Usuario ja existe em nossa base', 'status' => 2 , 'usuario'=>$usuario);
            }
        }catch(Exception $e){
            $resposta  = array('mensagem' => $e->getMessage() , 'status' => 0 , 'usuario'=>'');
        }
       // echo 'registrar';
        return response()->json($resposta);

        //echo '{"name":"-LdcBFf0rhGBqu23Kvbj"}';
        //$pagamento->register($json);
        die();
        //return $pagamento->register($json);
        //return view('benjamin/client/retorno', ['app_name' => 'app de teste' , 'public' => '/adm/']);
    }

    public function notification($idcompra){
      @print_r($_SERVER['HTTP_REFERER']);
        @$server = implode('-', $_SERVER);
        @$dados = implode('-', $_GET);
        @$dados = $idcompra.'::'.$dados;
        //print_r($dados);
        @file_put_contents('notiticacao.txt',$server.' - '.$dados);
   // print_r($request->all());
        echo 'Compra realizada com sucesso Ben-Facil';
    }

    public function cancelamento($idcompra){
      //  print_r($_GET);
        $dados = implode('-', $_GET);
        $dados = $idcompra.'::'.$dados;
        //print_r($dados);
        file_put_contents('canceladas.txt',$dados);
   // print_r($request->all());
        echo 'Compra foi cancenlada -  Ben-Facil';
    }

    public function retirar(){
        $dados = $_POST;
       // print_r($dados);


        $FIREBASE = "https://benjamin-a-padaria.firebaseio.com/users/".md5($dados['user_email'])."/retirar/".$dados['vault_key']."/";
        $NODE_GET = "products.json";
        $NODE_PUT = "products.json";
       // echo $FIREBASE . $NODE_GET ;
      
        $produtos_atendimento = array();
        foreach ($dados['vault'] as  $item) {
            if(isset($item['done']) && $item['done'] == true){
                $curl = curl_init();
                curl_setopt( $curl, CURLOPT_URL, $FIREBASE . $NODE_GET );
                curl_setopt( $curl, CURLOPT_RETURNTRANSFER, true );
                $response = curl_exec( $curl );
                curl_close( $curl );
                $produtos = json_decode($response);
                if(is_array($produtos)){
                    foreach ($produtos as $key => $produto) {
                        if(isset($produto->CODE) && $produto->CODE == $item['CODE']){
                            $obs = isset($item['obs'])?$item['obs']:'';
                            $qtd = isset($item['quantidade'])?$item['quantidade']:1;
                            $produtos_atendimento[] = array('CODE' => $item['CODE'],
                                        'PRESENTATION_NAME'=>  $item['CODE'],
                                        'VALUE'=>$item['VALUE'],
                                        'QTD'=>$qtd,
                                        'OBS'=>$obs);
                            $NODE_DELETE = $key.".json";

                            $curl = curl_init();

                             curl_setopt( $curl, CURLOPT_URL, $FIREBASE .'products/'. $NODE_DELETE );
                             curl_setopt( $curl, CURLOPT_CUSTOMREQUEST, "DELETE" );
                            curl_setopt( $curl, CURLOPT_RETURNTRANSFER, true );

                            $response = curl_exec( $curl );
                            curl_close( $curl );
                            break;
                        }
                    }
                }else{
                    $obs = isset($item['obs'])?$item['obs']:'';
                    $qtd = isset($item['quantidade'])?$item['quantidade']:1;
                        $produtos_atendimento[] = array('CODE' => $item['CODE'],
                                    'PRESENTATION_NAME'=>  $item['CODE'],
                                    'VALUE'=>$item['VALUE'],
                                    'QTD'=>$qtd,
                                    'OBS'=>$obs);
                    $curl = curl_init();
                    curl_setopt( $curl, CURLOPT_URL, $FIREBASE.".json" );
                    curl_setopt( $curl, CURLOPT_CUSTOMREQUEST, "DELETE" );
                    curl_setopt( $curl, CURLOPT_RETURNTRANSFER, true );
                    curl_exec( $curl );
                    curl_close( $curl );
                    
                }
                
           }

        }
       /* die();

        foreach ($dados['itens'] as  $item) {
            # code...
        
            foreach ($produtos as $key => $produto) {
                $x=0;
                if(isset($produto->CODE) && $produto->CODE == $item){
                    if(isset($dados['vault'][$x]['obs'])){
                        $produto->OBS=$dados['vault'][$x]['obs'];
                    }
                   // print_r($key);
                    $produtos_atendimento[]=$produto;
                    $NODE_DELETE = $key.".json";

                    $curl = curl_init();

                     curl_setopt( $curl, CURLOPT_URL, $FIREBASE .'products/'. $NODE_DELETE );
                     curl_setopt( $curl, CURLOPT_CUSTOMREQUEST, "DELETE" );
                    curl_setopt( $curl, CURLOPT_RETURNTRANSFER, true );

                    $response = curl_exec( $curl );
                    curl_close( $curl );
                    break;
                }

                $x++;
            }
        }*/

        $atendimento = array('user_email' => $dados['user_email'],
                            'user_hash' => md5($dados['user_email']),
                            'shop'=> $dados['loja'],
                            'products'=>$produtos_atendimento,
                            'tid'=>$dados['vault_key'],
                            'hora'=> (new \DateTime())->getTimestamp());

        $json = json_encode( $atendimento );

        //print_r($json);

        $FIREBASE = "https://benjamin-a-padaria.firebaseio.com/atendimentos/".$dados['loja']."/".md5($dados['user_email'])."/".$dados['vault_key'];
        $NODE_PUT = ".json";
        //echo $FIREBASE . $NODE_PUT ;
        $curl = curl_init();
        curl_setopt( $curl, CURLOPT_URL, $FIREBASE . $NODE_PUT );
        curl_setopt( $curl, CURLOPT_CUSTOMREQUEST, "PUT" );
        curl_setopt( $curl, CURLOPT_POSTFIELDS, $json );
        curl_setopt( $curl, CURLOPT_RETURNTRANSFER, true );
        $response = curl_exec( $curl );
        curl_close( $curl );
        //print_r($response);

        $FIREBASE = "https://benjamin-a-padaria.firebaseio.com/users/".md5($dados['user_email'])."/retirar/".$dados['vault_key']."/";
        $NODE_GET = "products.json";
       // echo $FIREBASE . $NODE_GET ;
        $curl = curl_init();
        curl_setopt( $curl, CURLOPT_URL, $FIREBASE . $NODE_GET );
        curl_setopt( $curl, CURLOPT_RETURNTRANSFER, true );
        $response = curl_exec( $curl );
        curl_close( $curl );
        print_r($response);
    }

    public function retirar_perfil(){
        $dados = $_POST;

        //print_r($dados['itens'][0]);
       // echo json_encode($dados['itens'][0]);

        $curl = curl_init();
        curl_setopt( $curl, CURLOPT_URL, "https://benjamin-a-padaria.firebaseio.com/users/".md5($dados['user_email'])."/retirar.json" );
        curl_setopt( $curl, CURLOPT_RETURNTRANSFER, true );
        $response = curl_exec( $curl );
        curl_close( $curl );
      //  print_r($response);
        //$produtos = json_decode($response,true); 
        
        $tratado = $dados['itens'][0];

    unset($tratado['$$hashKey']);
   // $dados['user_email'] = 'daniel@email';
   // $dados['loja'] = 1;
    $array_produtos_servidor = json_decode($response,true);
    $produtos_atendimento = array();

    foreach ($tratado as $key => $compras) {
        foreach ($compras as $compra => $products) {
            //
            //if(isset($products['done']))
            if (isset($products) && is_array($products)) {
                # code...
                foreach ($products as $produto) {
                    if(isset($produto['done'])){
                        //print_r($key);
                        //print_r($produto);
                        $FIREBASE = "https://benjamin-a-padaria.firebaseio.com/users/".md5($dados['user_email'])."/retirar/".$key."/products/";
                        
                        if (is_array($array_produtos_servidor[$key]['products'])) {
                            foreach ($array_produtos_servidor[$key]['products'] as $seq => $itens) {
                                //print_r($seq);
                                if(isset($produto['CODE']) && $produto['CODE'] == $itens['CODE']){
                                    //print_r($seq);

                                    $NODE_DELETE = $seq.".json";


                                    //echo $FIREBASE.$NODE_DELETE;

                                    $obs = isset($itens['obs'])?$itens['obs']:'';
                            $produtos_atendimento[] = array('CODE' => $itens['CODE'],
                                        'PRESENTATION_NAME'=>  $itens['PRESENTATION_NAME'],
                                        'VALUE'=>$itens['VALUE'],
                                        'OBS'=>$obs);
                            $NODE_DELETE = $seq.".json";

                            $curl = curl_init();

                             curl_setopt( $curl, CURLOPT_URL, $FIREBASE.$NODE_DELETE );
                             curl_setopt( $curl, CURLOPT_CUSTOMREQUEST, "DELETE" );
                            curl_setopt( $curl, CURLOPT_RETURNTRANSFER, true );

                            $response = curl_exec( $curl );
                            curl_close( $curl );
                            break;

                                }
                            }
                        }
                    }

                }
            }

        }
    }
    //print_r($produtos_atendimento);
    $atendimento = array('user_email' => $dados['user_email'],
                            'user_hash' => md5($dados['user_email']),
                            'shop'=> $dados['loja'],
                            'products'=>$produtos_atendimento,
                            'tid'=>(new \DateTime())->getTimestamp(),
                            'hora'=> (new \DateTime())->getTimestamp());

        $json = json_encode( $atendimento );
        //print_r($json);

        $FIREBASE = "https://benjamin-a-padaria.firebaseio.com/atendimentos/".$dados['loja']."/".md5($dados['user_email'])."/".(new \DateTime())->getTimestamp();
        $NODE_PUT = ".json";
       // echo $FIREBASE . $NODE_PUT ;
        $curl = curl_init();
        curl_setopt( $curl, CURLOPT_URL, $FIREBASE . $NODE_PUT );
        curl_setopt( $curl, CURLOPT_CUSTOMREQUEST, "PUT" );
        curl_setopt( $curl, CURLOPT_POSTFIELDS, $json );
        curl_setopt( $curl, CURLOPT_RETURNTRANSFER, true );
        $response = curl_exec( $curl );
        curl_close( $curl );


        $FIREBASE = "https://benjamin-a-padaria.firebaseio.com/users/".md5($dados['user_email'])."/";
        $NODE_GET = "retirar.json";
       // echo $FIREBASE . $NODE_GET ;
        $curl = curl_init();
        curl_setopt( $curl, CURLOPT_URL, $FIREBASE . $NODE_GET );
        curl_setopt( $curl, CURLOPT_RETURNTRANSFER, true );
        $response = curl_exec( $curl );
        curl_close( $curl );
        print_r($response);
    }


    public function retirar_historico(){
        $dados = $_POST;

        //print_r($dados['itens'][0]);
       // echo json_encode($dados['itens'][0]);

        $curl = curl_init();
        curl_setopt( $curl, CURLOPT_URL, "https://benjamin-a-padaria.firebaseio.com/users/".md5($dados['user_email'])."/retirar.json" );
        curl_setopt( $curl, CURLOPT_RETURNTRANSFER, true );
        $response = curl_exec( $curl );
        curl_close( $curl );
      //  print_r($response);
        //$produtos = json_decode($response,true); 
        
        $tratado = $dados['itens'];

    unset($tratado['$$hashKey']);
   // $dados['user_email'] = 'daniel@email';
   // $dados['loja'] = 1;
    $array_produtos_servidor = json_decode($response,true);
    $produtos_atendimento = array();

    foreach ($tratado as $key => $compras) {
        foreach ($compras as $compra => $products) {
            //
            //if(isset($products['done']))
            if (isset($products) && is_array($products)) {
                # code...
                foreach ($products as $produto) {
                    if(isset($produto['done'])){
                        //print_r($key);
                        //print_r($produto);
                        $FIREBASE = "https://benjamin-a-padaria.firebaseio.com/users/".md5($dados['user_email'])."/retirar/".$key."/products/";
                        
                        if (is_array($array_produtos_servidor[$key]['products'])) {
                            foreach ($array_produtos_servidor[$key]['products'] as $seq => $itens) {
                                //print_r($seq);
                                if(isset($produto['CODE']) && $produto['CODE'] == $itens['CODE']){
                                    //print_r($seq);

                                    $NODE_DELETE = $seq.".json";


                                    //echo $FIREBASE.$NODE_DELETE;

                                    $obs = isset($itens['obs'])?$itens['obs']:'';
                            $produtos_atendimento[] = array('CODE' => $itens['CODE'],
                                        'PRESENTATION_NAME'=>  $itens['PRESENTATION_NAME'],
                                        'VALUE'=>$itens['VALUE'],
                                        'OBS'=>$obs);
                            $NODE_DELETE = $seq.".json";

                            $curl = curl_init();

                             curl_setopt( $curl, CURLOPT_URL, $FIREBASE.$NODE_DELETE );
                             curl_setopt( $curl, CURLOPT_CUSTOMREQUEST, "DELETE" );
                            curl_setopt( $curl, CURLOPT_RETURNTRANSFER, true );

                            $response = curl_exec( $curl );
                            curl_close( $curl );
                            break;

                                }
                            }
                        }
                    }

                }
            }

        }
    }


       foreach ($tratado as $key => $compras) {
        if(isset($compras['done'])){
            $obs = isset($compras['obs'])?$compras['obs']:'';
            $produtos_atendimento[] = array('CODE' => $compras['CODE'],
                        'PRESENTATION_NAME'=>  $compras['PRESENTATION_NAME'],
                        'VALUE'=>$compras['VALUE'],
                        'OBS'=>$obs);
            $FIREBASE = "https://benjamin-a-padaria.firebaseio.com/users/".md5($dados['user_email'])."/retirar/".$key;
             $NODE_DELETE = $FIREBASE.".json";

            $curl = curl_init();

            curl_setopt( $curl, CURLOPT_URL, $NODE_DELETE );
            curl_setopt( $curl, CURLOPT_CUSTOMREQUEST, "DELETE" );
            curl_setopt( $curl, CURLOPT_RETURNTRANSFER, true );

            $response = curl_exec( $curl );
            curl_close( $curl );

        }
     
    }

 

    //print_r($produtos_atendimento);
    $atendimento = array('user_email' => $dados['user_email'],
                            'user_hash' => md5($dados['user_email']),
                            'shop'=> $dados['loja'],
                            'products'=>$produtos_atendimento,
                            'tid'=>(new \DateTime())->getTimestamp(),
                            'hora'=> (new \DateTime())->getTimestamp());

        $json = json_encode( $atendimento );
        //print_r($json);

        $FIREBASE = "https://benjamin-a-padaria.firebaseio.com/atendimentos/".$dados['loja']."/".md5($dados['user_email'])."/".(new \DateTime())->getTimestamp();
        $NODE_PUT = ".json";
       // echo $FIREBASE . $NODE_PUT ;
        $curl = curl_init();
        curl_setopt( $curl, CURLOPT_URL, $FIREBASE . $NODE_PUT );
        curl_setopt( $curl, CURLOPT_CUSTOMREQUEST, "PUT" );
        curl_setopt( $curl, CURLOPT_POSTFIELDS, $json );
        curl_setopt( $curl, CURLOPT_RETURNTRANSFER, true );
        $response = curl_exec( $curl );
        curl_close( $curl );


        $FIREBASE = "https://benjamin-a-padaria.firebaseio.com/users/".md5($dados['user_email'])."/";
        $NODE_GET = "retirar.json";
       // echo $FIREBASE . $NODE_GET ;
        $curl = curl_init();
        curl_setopt( $curl, CURLOPT_URL, $FIREBASE . $NODE_GET );
        curl_setopt( $curl, CURLOPT_RETURNTRANSFER, true );
        $response = curl_exec( $curl );
        curl_close( $curl );
        print_r($response);

    }

}
