<?php
namespace App\Classes;


class User extends \App\User {
	public $user;

    public function login(){
        $user = $this->where( 'email', $this->email )->first();

        $response = array();
        $response['response'] = "Login unsuccessful"; 
        $response['status'] = 0; 
        $response['group'] = 0; 

        if($user){
            if($user->password != $this->password){
                $response['response'] = "Login unsuccessful"; 
                $response['status'] = 0; 
                $response['group'] = 0; 
            }else{
                $response['response'] = "Login successful"; 
                $response['status'] = 1; 
                $response['group'] = $user->group_id ;
                $usuario['name'] = $user->name;
                $usuario['id'] = $user->id;
                $usuario['group_id'] = $user->group_id;
                $usuario['imagem'] = $user->imagem;
                $usuario['email'] = $user->email;
                $usuario['user_token'] = $user->user_token;
                $response['usuario'] = $usuario ;
                $_SESSION['logado'] = 1;
                $_SESSION['usuario_logado'] = $usuario;

                $user->logado = 1 ; 
                $user->save();
            }
        }else{
            $response['response'] = "Email does not exist"; 
            $response['status'] = 0; 
            $response['group'] = 0; 
        }

        return $response;
    }

    public function inserir($usuario){
        $this->email = "test@test.com";
        $this->password = "test123pass";
        $this->name = "this";
        $this->logado = 0;
       // $this->login = new \DateTime('2018-01-01 00:00:09');
       // $this->login = '2018-01-01 00:00:09';
        $this->rank = 0;
        $this->disponivel = 1;
        $this->pipedrive_id = 0;
        $this->group_id = 2;
        //print_r($this);
        //die();
        $this->save();
    }

    public function criar_roleta(){
        if($this->group_id == 1){
            return "criada";
        }else{
            return "nao pode criar";
        }
    }

    public function logados(){
        return  \App\Classes\User::where('logado', 1)->get();

    }

    public function disponiveis(){
        return  \App\Classes\User::where('disponivel', 1)->get();
    }

    public function participantes_roleta($roleta_id){
        $corretores = \App\Classes\User::where('roleta_id', $roleta_id)->get();
        $corretores_validos = array();
        foreach ($corretores as $corretor) {
            if(! \App\Appointment::where('user_id',$corretor->id)->where('status','==' , 0)->first())
                $corretores_validos[] = $corretor;
        }

        return $corretores_validos;
    }

    public function send_message($receiver , $txt_msg)
    {

        $msg = new \App\Classes\Message;
        $msg->user_id = $this->id;
        $msg->receiver = $receiver;
        $msg->text = $txt_msg;
        $msg->status = 1;
        $msg->save();

    }

    public function list_messages()
    {
        $msgs = \App\Message::where('receiver', $this->id)->get();
        return $msgs;
    }

     public function list_system_messages()
    {
        $msgs = \App\Message::where('receiver', 0)->get();
        return $msgs;
    }

};
