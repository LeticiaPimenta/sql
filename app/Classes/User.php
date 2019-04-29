<?php
namespace App\Classes;

class User extends \App\User {
	public $user;

    public function login(){
        $user = $this->where( 'email', $this->email )->first();

        if($user){
            if($user->password != $this->password){
                return "Login unsuccessful"; 
            }
            return "Login successful";
        }else{
            return "Email does not exist";
        }

       
    }

    public function foqya(){
    	return 'modafoca';
    }

};