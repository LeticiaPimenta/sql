<?php namespace App\Http\Controllers;

class BenjaminClientController extends Controller {

	private $actions;

	public function __construct()
	{
		$this->actions = array(
        'preloading'=>array('view'=>'client/preloading','js'=>'client/preloading','navbar'=>'navbar'),
        'pwa'=>array('view'=>'client/index','js'=>'client/login','navbar'=>'navbar'),
        'termos'=>array('view'=>'client/termos','js'=>'empty','navbar'=>'navbar'),
        'logar_phone'=>array('view'=>'client/logar_phone','js'=>'client/celular','navbar'=>'navbar'),
        'registrar'=>array('view'=>'client/registrar','js'=>'client/registrar','navbar'=>'navbar'),
        'indicado'=>array('view'=>'client/registrar','js'=>'client/indicado','navbar'=>'navbar'),
        'login'=>array('view'=>'client/login_app','js'=>'client/logar_app','navbar'=>'navbar'),
		'beta'=>array('view'=>'client/beta','js'=>'client/location','navbar'=>'navbar'),
		'qrunidade'=>array('view'=>'client/qrunidade','js' => 'client/logado' , 'navbar'=>'navbar'),
		'select'=>array('view'=>'client/select','js' => 'client/logado' , 'navbar'=>'navbar'),
        'cardapio'=>array('view'=>'client/cardapio','js' => 'client/add_cart' , 'navbar'=>'client/navbar_cart'),
        'combos'=>array('view'=>'client/combos','js' => 'client/combos' , 'navbar'=>'client/navbar_cart'),
		'creditos'=>array('view'=>'client/creditos','js' => 'client/creditos' , 'navbar'=>'client/navbar_cart'),
        'sub_cardapio'=>array('view'=>'client/cardapio_1','js' => 'client/add_cart,client/campanha_produtos' , 'navbar'=>'client/navbar_cart'),
		'carrinho'=>array('view'=>'client/carrinho','js' => 'client/cart' , 'navbar'=>'client/navbar_hist'),
        'creditar'=>array('view'=>'client/creditar','js' => 'client/creditar' , 'navbar'=>'client/navbar_hist'),
		'historico'=>array('view'=>'client/historico','js' => 'client/history' , 'navbar'=>'client/navbar_cart'),
        'perfil'=>array('view'=>'client/perfil','js' => 'client/history' , 'navbar'=>'client/navbar_cart'),
        'adicionar_bem'=>array('view'=>'client/adicionar','js' => 'client/history' , 'navbar'=>'client/navbar_cart'),
        'ler_amigo'=>array('view'=>'client/leramigo','js' => 'client/logado' , 'navbar'=>'navbar'),
		);
	}

    public function preloading(){      
        return $this->chamar_get('preloading');
    }

    public function pwa(){  	
    	return $this->chamar_get('pwa');
    }

    public function registrar(){      
        $selected_action = $this->actions['registrar'];
        return view('benjamin/indexsemfooter', ['partial'=>$selected_action['view'],'navbar'=>$selected_action['navbar'] , 'js_view'=> $selected_action['js']]);
    }

    public function descontar_wallet()
    {
        header('Content-Type: application/json'); 
        $postdata = file_get_contents("php://input");
        $request = json_decode($postdata , true);

        $me =  \App\User::where('user_token',$_SESSION['usuario_logado']['user_token'])->first();
        $transfer = new \App\Classes\Transfer;
        $retorno = $transfer->pagar($me->id ,$request['loja'] , $request['valor_desconto']);
        print_r(json_encode($retorno));
    }

    public function indicado($amigo){   

        $selected_action = $this->actions['indicado'];
        return view('benjamin/indexsemfooter', ['partial'=>$selected_action['view'],'navbar'=>$selected_action['navbar'] ,'amigo'=>$amigo , 'js_view'=> $selected_action['js']]);
    }

    public function adicionar_bem($loja){   
        $action = 'adicionar_bem';       
        $selected_action = $this->actions[$action];
        $me = "[]";
        $amigos = "[]";

        $me =  \App\User::where('user_token',$_SESSION['usuario_logado']['user_token'])->first()->toJson();
        
        $amigos = \App\User::where('parent_user',$_SESSION['usuario_logado']['user_token'])->get()->toJson();

        $nome ='Perfil';
        return view('benjamin/index', ['partial'=>$selected_action['view'],'navbar'=>$selected_action['navbar'] , 'js_view'=> $selected_action['js'],'loja'=>$loja ,  'nome' =>$nome,  'indicados' =>$amigos ,  'me' =>$me]);   

    }

    public function ler_amigo($loja){   
        return $this->chamar_get('ler_amigo');
    }

    public function termos(){   
        return $this->chamar_get('termos');
    }

    public function celular(){      
        return $this->chamar_get('logar_phone');
    }

    public function bemamigo($user_token){      
        $amigos = \App\User::where('parent_user',$user_token)->get()->toJson();
        print_r($amigos);

    }

    public function amigotransferir()
    {
        header('Content-Type: application/json'); 
        $postdata = file_get_contents("php://input");
        $request = json_decode($postdata , true);

        $me =  \App\User::where('user_token',$request['user_token'])->first();
        //echo $me;

        $resposta = array('nome' => $me->name ,'email' => $me->email , 'user_token'=>$request['user_token']);

        echo json_encode($resposta);

    }

    public function fazertransferencia()
    {
        header('Content-Type: application/json'); 
        $postdata = file_get_contents("php://input");
        $request = json_decode($postdata , true);
        $user_token = $_SESSION['usuario_logado']['user_token'];

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

    public function login(){      
        $selected_action = $this->actions['login'];
        return view('benjamin/indexsemfooter', ['partial'=>$selected_action['view'],'navbar'=>$selected_action['navbar'] , 'js_view'=> $selected_action['js']]);
    }

    public function logar()
    {
        $user = new \App\Classes\User;
        $user->email = $_POST['email'];
        $user->password = $_POST['password'];
        $response = $user->login();
        
        return response()->json($response);
    }

     public function registrar_usuario(){
        //$postdata = file_get_contents("php://input");
        //$_POST = json_decode($postdata  , true);

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
    }

    public function favoritos(){    
        header('Content-Type: application/json');  
        //users/c8f778faa37477eb3e7e07622990b75c
        //ce11fce876c93ed5d2a72da660496473
        $user_token = $_SESSION['usuario_logado']['user_token'];
        
        $url = 'https://benjamin-a-padaria.firebaseio.com/users/'.$user_token.'/compras.json';
        //$url = 'https://benjamin-a-padaria.firebaseio.com/users/10155806288081606/compras.json';
        //$url = 'https://benjamin-a-padaria.firebaseio.com/users/5ab4edea835919e0bc28b19dc0d5af7b/compras.json';
        $rawdata = file_get_contents($url);
        $favoritos = array();
        if ($rawdata === false) {
            echo "[]";
            die();
            exit("Unable to update data at $url");
        }

        if ($rawdata === "null") {
            echo "[]";
            die();
            exit("Unable to update data at $url");
        }

        try {
            $data = json_decode($rawdata, true);

        //echo '<pre>';
        //echo count($data);

        foreach ($data as $carrinho) {
            # code...
           // var_dump($data);
            if(is_null($carrinho)){
                foreach ($data[1] as $compras) {

                   // print_r($compras);
                   // die();
                    if(isset($compras['products'])){
                        foreach ($compras['products'] as $produto) {
                        //print_r($produto['product']);
                            # code...
                            $favoritos[$produto['product']][]=$produto['product'];
                        }
                    }

                    
                    # code...
                }
                  
            }else{
                foreach ($carrinho as $loja) {
                //foreach ($loja as $compras) {
                    //foreach ($compras as $compra) {
                        //print_r($loja);
                        if (isset($loja['products'])) {
                            foreach ($loja['products'] as $produto) {
                            //print_r($produto['product']);
                                # code...
                                $favoritos[$produto['product']][]=$produto['product'];
                            }
                        }
                        
                        # code...
                    //}

                    # code...
               // }
                # code...
            }
            }
            //var_dump($carrinho);
           // die();
            

        }
        //print_r($favoritos);
       /* foreach ($favoritos as $id => $favorito) {
            # code...
            echo $id ." : ";
            echo count($favorito);
                    echo '<hr>';
        }*/

       array_multisort(array_map('count', $favoritos), SORT_DESC, $favoritos);

       //print_r($retorno);
       //print_r($favoritos);
       $listagem = array();
       foreach ($favoritos as $key => $value) {

            $listagem[]=$value[0];

       }

       //print_r($listagem);
            echo json_encode($listagem);
        } catch (Exception $e) {
             echo "[]";
            die();
        }


        

    } 

    public function beta(){      
        return $this->chamar_get('beta');
    }

    public function qrunidade(){  	
    	return $this->chamar_get('qrunidade');
    }

    public function select(){  	
    	return $this->chamar_get('select');
    }

    public function cardapio($loja){    
        $action = 'cardapio';       
        $selected_action = $this->actions[$action];
        $nome ='Cardapio';



        return view('benjamin/index', ['partial'=>$selected_action['view'],'navbar'=>$selected_action['navbar'] , 'js_view'=> $selected_action['js'],'loja'=>$loja ,  'nome' =>$nome]);
    }

    public function combos($loja){
        $action = 'combos';       
        $selected_action = $this->actions[$action];
        $nome ='Combos';
        return view('benjamin/index', ['partial'=>$selected_action['view'],'navbar'=>$selected_action['navbar'] , 'js_view'=> $selected_action['js'],'loja'=>$loja ,  'nome' =>$nome]);


    }

    public function creditos($loja){  	
    	$action = 'creditos';       
        $selected_action = $this->actions[$action];
        $nome ='BenCreditos';
        return view('benjamin/index', ['partial'=>$selected_action['view'],'navbar'=>$selected_action['navbar'] , 'js_view'=> $selected_action['js'],'loja'=>$loja ,  'nome' =>$nome]);
    }

    public function campanha($nome , $loja, $cliente){ 
        $action = 'cardapio';       
        $selected_action = $this->actions[$action];
        return view('benjamin/index', ['partial'=>$selected_action['view'],'navbar'=>$selected_action['navbar'] , 'js_view'=> $selected_action['js'],'loja'=>$loja , 'cliente'=> $cliente , 'nome' =>$nome]);
    }


     public function campanha_nome($nome , $loja){ 
        $action = 'sub_cardapio';       
        $selected_action = $this->actions[$action];
        return view('benjamin/index', ['partial'=>$selected_action['view'],'navbar'=>$selected_action['navbar'] , 'js_view'=> $selected_action['js'],'loja'=>$loja , 'cliente'=> '1' , 'nome' =>$nome]);
    }

    public function carrinho($loja){  
        $action = 'carrinho';       
        $selected_action = $this->actions[$action];
        $nome ='Carrinho';

        $me =  \App\User::where('user_token',$_SESSION['usuario_logado']['user_token'])->first()->toJson();

        return view('benjamin/index', ['partial'=>$selected_action['view'],'navbar'=>$selected_action['navbar'] , 'js_view'=> $selected_action['js'],'loja'=>$loja ,  'nome' =>$nome,  'me' =>$me]);
    }

    public function creditar(){  
        $action = 'creditar';       
        $selected_action = $this->actions[$action];
        $nome ='Carrinho';
        return view('benjamin/index', ['partial'=>$selected_action['view'],'navbar'=>$selected_action['navbar'] , 'js_view'=> $selected_action['js'],'loja'=>1 ,  'nome' =>$nome]);
    }

    public function historico($loja, $cliente){  	
    	return $this->chamar_get_loja_cliente('historico', $loja, $cliente);
    }

    public function perfil($loja){  
        $action = 'perfil';       
        $selected_action = $this->actions[$action];
        $me = "[]";
        $amigos = "[]";

        $me =  \App\User::where('user_token',$_SESSION['usuario_logado']['user_token'])->first()->toJson();
        $amigos = \App\User::where('parent_user',$_SESSION['usuario_logado']['user_token'])->get()->toJson();
        $benamigo = new \App\Classes\BenAmigo;

        $total_amigos = $benamigo->listar_amigos($_SESSION['usuario_logado']['user_token']);
        //print_r($total_amigos);

        $nome ='Perfil';
        return view('benjamin/index', ['partial'=>$selected_action['view'],'navbar'=>$selected_action['navbar'] , 'js_view'=> $selected_action['js'],'loja'=>$loja ,  'nome' =>$nome,  'indicados' =>$amigos ,'benamigos' =>json_encode($total_amigos) ,   'me' =>$me]);   

       // return $this->chamar_get_loja_cliente('perfil', $loja, $cliente);
    }

    public function adicionar_amigo($amigo){  
        
        $benamigo = new \App\Classes\BenAmigo;

        $benamigo->conectar_benamigos($_SESSION['usuario_logado']['user_token'],$amigo);

        $eu_ben_amigo = \App\User::where('user_token',$amigo)->first()->toArray();
        $resposta = array('nome' => $eu_ben_amigo['name'], 'email' => $eu_ben_amigo['email']);
        echo "Agora vc é amigo do usuario";
        echo json_encode($resposta);
        
    }

    public function __produtos()
    { 
    	$produtos = json_decode(file_get_contents('prods.json') , true);
	    $listados = array();
	    foreach ($produtos as $produto) {
	        $item = array('id' => 'nome', 'nome'=>'nome' );
	        //print_r($item);
	        $listados[$produto['Categoria']][$produto['Sub-Categoria']][$produto['PRO_CODIGO']] = $produto;

	    }
	    echo json_encode($listados);# code...
    }

    public function produtos()
    { 
        $produtos = json_decode(file_get_contents('catalogo.json') , true);

        echo json_encode($produtos);# code...
    }


    public function ler_combos()
    { 
        $produtos = json_decode(file_get_contents('combos.json') , true);

        echo json_encode($produtos);# code...
    }

    public function produtos_id()
    { 
        $produtos = json_decode(file_get_contents('catalogo.json') , true);
        $listados = array();

        foreach ($produtos as $key => $value) {
            # code...
            $listados[$value['PRO_CODIGO']]=$value;
        }
           // print_r($listados);

        echo json_encode($listados);# code...
    }

    public function produtos_campanha_nome($nome)
    { 
        print_r($nome);
    }


    public function produtos_campanha()
    { 
        $produtos = json_decode(file_get_contents('prods.json') , true);
        shuffle($produtos);
        $limit = array(1=>6,2=>9, 3=>12);
        $total = $limit[rand(1,3)];
        //echo $total;
        $filtrados = array_slice($produtos,0,$total,true);

        echo json_encode($filtrados);# code...
    }

    public function chamar_get_loja_cliente($action, $loja, $cliente){
    	$selected_action = $this->actions[$action];
    	return view('benjamin/index', ['partial'=>$selected_action['view'],'navbar'=>$selected_action['navbar'] , 'js_view'=> $selected_action['js'],'loja'=>$loja , 'cliente'=> $cliente]);
    }

    public function chamar_get($action){
    	$selected_action = $this->actions[$action];
    	return view('benjamin/index', ['partial'=>$selected_action['view'],'navbar'=>$selected_action['navbar'] , 'js_view'=> $selected_action['js']]);
    }

}
