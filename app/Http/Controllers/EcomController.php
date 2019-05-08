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

    public function renderizar($idcompra){
        return view('benjamin/client/retorno', ['app_name' => 'app de teste' , 'public' => '/adm/']);
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
                            $produtos_atendimento[] = array('CODE' => $item['CODE'],
                                        'PRESENTATION_NAME'=>  $item['CODE'],
                                        'VALUE'=>$item['VALUE'],
                                        'OBS'=>$obs);
                            $NODE_DELETE = $key.".json";

                            $curl = curl_init();

                             curl_setopt( $curl, CURLOPT_URL, $FIREBASE .'products/'. $NODE_DELETE );
                             curl_setopt( $curl, CURLOPT_CUSTOMREQUEST, "DELETE" );
                            curl_setopt( $curl, CURLOPT_RETURNTRANSFER, true );

                            $response = curl_exec( $curl );
                            curl_close( $curl );
                            //break;
                        }
                    }
                }else{
                    $obs = isset($item['obs'])?$item['obs']:'';
                        $produtos_atendimento[] = array('CODE' => $item['CODE'],
                                    'PRESENTATION_NAME'=>  $item['CODE'],
                                    'VALUE'=>$item['VALUE'],
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

}
