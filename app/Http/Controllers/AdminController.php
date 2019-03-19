<?php namespace App\Http\Controllers;

class AdminController extends Controller {

	private $actions;

	public function __construct()
	{

		$this->actions = array(
		'pwa'=>array('view'=>'attendant/select','js'=>'empty','navbar'=>'navbar'),
		'unidade'=>array('view'=>'attendant/unidade','js' =>'attendant/unidade' , 'navbar'=>'attendant/navbar'),
		'select'=>array('view'=>'attendant/select','js' => 'attendant/unidade' , 'navbar'=>'attendant/navbar'),
		'pedidos'=>array('view'=>'attendant/pedidos','js' => 'attendant/pedidos' , 'navbar'=>'attendant/navbar'),
		'atender'=>array('view'=>'attendant/atender','js' => 'attendant/pedidos' , 'navbar'=>'attendant/navbar'),
		'historico'=>array('view'=>'attendant/historico','js' => 'empty' , 'navbar'=>'attendant/navbar')
		);
	}

 
    public function home(){
    	//$selected_action = $this->actions[$action];
        $usuario_logado = $_SESSION['usuario_logado'];
    	return view('smart_admin/index', ['partial'=>'home', 'usuario'=>$usuario_logado, 'js'=>'home']);
    }

    public function listagem($entidade){
        $usuario_logado = $_SESSION['usuario_logado'];
        $app_entidade = '\App\\'.ucfirst($entidade);
        return view('smart_admin/index', ['partial'=>'listagem' , 'js'=>'listagem' ,  'listagem'=>$app_entidade::all()->toJson() , 'entidade'=>$entidade, 'usuario'=>$usuario_logado ]);
    }

    public function ver($entidade, $id)
    {
        $usuario_logado = $_SESSION['usuario_logado'];
        $value = \Symfony\Component\Yaml\Yaml::parseFile('../schema.yaml');
        $app_entidade = '\App\\'.ucfirst($entidade);
        //var_dump($value[ucfirst($entidade)]);
        return view('smart_admin/index', ['partial'=>'ver' , 'form'=>$value[ucfirst($entidade)] ,'target'=> [] , 'entidade'=>$entidade, 'usuario'=>$usuario_logado ]);
    }

    public function list_produtos(){
        //$selected_action = $this->actions[$action];

        $produtos = \DB::table('produto')->take(500)->get()->toJson();

        $usuario_logado = $_SESSION['usuario_logado'];
       
        return view('smart_admin/produtos', ['partial'=>'teste' , 'usuarios'=>$produtos , 'usuario'=>$usuario_logado ]);
    }

      public function list_lojas(){
        //$selected_action = $this->actions[$action];

        //$produtos = \DB::table('produto')->take(500)->get()->toJson();

        $usuario_logado = $_SESSION['usuario_logado'];
       
        return view('smart_admin/index', ['partial'=>'listagem' ,'entidade'=>'Loja', 'usuarios'=>\App\Shop::all()->toJson()  , 'usuario'=>$usuario_logado ]);
    }


    public function list_pay(){
        //$selected_action = $this->actions[$action];

        //$produtos = \DB::table('produto')->take(500)->get()->toJson();

        $usuario_logado = $_SESSION['usuario_logado'];
       
        return view('smart_admin/index', ['partial'=>'pagamentos' ,'entidade'=>'pagamento', 'listagem'=>\App\Payment::all()->toJson()  , 'usuario'=>$usuario_logado, 'js'=>'pagamentos']);
    }

    public function list_pagamentos(){
        $todos =  \App\Payment::all();
        print_r($todos->toJson());
    }

    public function list_pagamentos_loja($shop){
        $todos =  \App\Payment::where('shop',$shop )->get();
        print_r($todos->toJson());
    }


    public function view_pagamento($id){
        //$selected_action = $this->actions[$action];

        //$produtos = \DB::table('produto')->take(500)->get()->toJson();

        $usuario_logado = $_SESSION['usuario_logado'];
       
        return view('smart_admin/index', ['partial'=>'pagamento' ,'entidade'=>'pagamento', 'pagamento'=>\App\Payment::find($id)->toJson()  , 'usuario'=>$usuario_logado, 'js'=>'pagamento']);
    }


    public function minhas_lojas(){
        //$selected_action = $this->actions[$action];

        //$produtos = \DB::table('produto')->take(500)->get()->toJson();

        $usuario_logado = $_SESSION['usuario_logado'];

        $lojas = \App\ShopManager::where('manager_id',$usuario_logado['id'])->get();

        $ids_lojas = array();
        foreach ($lojas as $loja) {
            $ids_lojas[]=\App\Shop::find($loja->shop_id);
        }

        return view('smart_admin/index', ['partial'=>'listagem' ,'entidade'=>'Loja', 'usuarios'=>json_encode($ids_lojas)  , 'usuario'=>$usuario_logado ]);
    }

     public function ver_loja($id){
        //$selected_action = $this->actions[$action];

        //$produtos = \DB::table('produto')->take(500)->get()->toJson();

        $usuario_logado = $_SESSION['usuario_logado'];

        $gerentes = \App\ShopManager::where('shop_id',$id)->get();

        $ids_gerentes = array();
        foreach ($gerentes as $gerente) {
            $ids_gerentes[]=\App\User::find($gerente->manager_id);
        }

       
        return view('smart_admin/index', ['partial'=>'ver_loja' ,'js'=>'ver_loja' ,'entidade'=>'Loja', 'loja'=>json_decode(\App\Shop::find($id))  ,'gerentes'=> json_encode($ids_gerentes)  , 'usuario'=>$usuario_logado , 'usuarios'=>\App\User::all()->toJson() ]);
    }


    public function view_produto($id){
        return view('smart_admin/index', ['partial'=>'view_produto' , 'produto'=>json_encode(\DB::table('produto')->whereId($id)->first()), 'usuario'=> $_SESSION['usuario_logado']]);
    }

     public function usuarios(){
    	//$selected_action = $this->actions[$action];
    	$todos =  \App\User::all();
        print_r($todos->toJson());

    	die();
    	return view('inspinia/index', ['partial'=>'teste']);
    }

    public function login(){
    	$user = new \App\Classes\User;
        $user->email = $_POST['email'];
        $user->password = $_POST['password'];
        $response = $user->login();
        
        return response()->json($response);
    }

    public function preset()
    {
        \DB::table('groups')->truncate();
        \DB::table('users')->truncate();
        \DB::table('shops')->truncate();

        $shop =  new \App\Shop;
        $shop->name = "Loja 1";
        $shop->save();

    	$grupo =  new \App\Group;
        $grupo->name = "Admin";
        $grupo->save();

        $gerente =  new \App\Group;
        $gerente->name = "Gerente";
        $gerente->save();

        $grupos =  \App\Group::all();
        echo '<pre>';
        print_r($grupos);
        
        echo '<hr>';

        $user =  new \App\User;
        $user->name = "Admin";
        $user->email = "admin@email.com";
        $user->password = "teste";
        $user->logado = 0;
        $user->user_token = md5($user->email);
        $user->group_id = $grupo->id;
        $user->wallet = 100;
        //$user->piracao = 'unicornio';
        $user->save();

        $user2 =  new \App\User;
        $user2->name = "gerente";
        $user2->email = "gerente@email.com";
        $user2->group_id = $gerente->id;
        $user2->user_token = md5($user2->email);
        $user2->password = "teste";
        $user2->logado = 0;
        $user2->wallet = 500;
        $user2->save();

        $users =  \App\User::all();
        print_r($users);
    }

}
