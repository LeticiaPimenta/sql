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
       // echo $FIREBASE . $NODE_GET ;
        $curl = curl_init();
        curl_setopt( $curl, CURLOPT_URL, $FIREBASE . $NODE_GET );
        curl_setopt( $curl, CURLOPT_RETURNTRANSFER, true );
        $response = curl_exec( $curl );
        curl_close( $curl );
        $produtos = json_decode($response);
        $x=0;
        foreach ($dados['itens'] as  $item) {
            # code...
        
            foreach ($produtos as $key => $produto) {
                if(isset($produto->CODE) && $produto->CODE == $item){
                    print_r($key);
                    //echo "<br>";
                    echo " # ";
                    print_r($produto);
                    echo "<hr>";  

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
        }

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
