<?php
namespace App\Classes;

class Payment extends \App\Payment {
	public $user;

    public function register($json_cart){
        $cart = json_decode($json_cart);

        $total = 0;
        $produtos = array();

        foreach ($cart->cart as $item) {
            if(isset($item->VALUE)){
                $produtos[]=$item;

                $total+=$item->VALUE;  
            }
        }
        $hash_user = md5($cart->user);
        $retirar = array();

        $retirar['hora'] =  (new \DateTime())->getTimestamp();
        $retirar['user'] =  $cart->user;
        $retirar['hash_user'] =  $hash_user;
        $retirar['shop'] =  1;
        $retirar['products'] =  $produtos;
        $url = 'https://benjamin-a-padaria.firebaseio.com/users/'.$hash_user.'/retirar.json';
        $ch = curl_init($url);

        $jsonDataEncoded = json_encode($retirar);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonDataEncoded);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json')); 
        $result = curl_exec($ch);

        $registrar = new \App\Payment;
        $registrar->name = $cart->user;
        $registrar->dados = $json_cart;
        $registrar->type = $cart->method;
        $registrar->user = $hash_user;
        $registrar->total = $total;
        $tid = json_decode($result);
        $registrar->tid = $tid->name;
        $registrar->shop = 1;
        $registrar->save();

        print_r($result);
        //echo $registrar->tid;

        //return $registrar->toJson();
    }

};