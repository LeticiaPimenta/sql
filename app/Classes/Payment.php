<?php
namespace App\Classes;

class Payment extends \App\Payment {
	public $user;

    public function register($json_cart){
        $cart = json_decode($json_cart);

        $total = 0;
        $produtos = array();

        foreach ($cart->cart as $item) {

            $produtos[]=$item;

            $total+=$item->VALUE;
        }

        $hash_user = md5($cart->user);
        $registrar = new \App\Payment;
        $registrar->name = $hash_user;
        $registrar->dados = $json_cart;
        $registrar->type = $cart->method;
        $registrar->user = $hash_user;
        $registrar->total = $total;
        $registrar->shop = 1;
        $registrar->save();

       $retirar = array();

       $retirar['hora'] =  (new \DateTime())->getTimestamp();
       $retirar['user'] =  $hash_user;
       $retirar['shop'] =  $registrar->shop;
       $retirar['products'] =  $produtos;


        $url = 'https://benjamin-a-padaria.firebaseio.com/users/'.$hash_user.'/retirar.json';
        $ch = curl_init($url);
        $jsonDataEncoded = json_encode($retirar);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonDataEncoded);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json')); 
        $result = curl_exec($ch);

        return $result;

        //return $registrar->toJson();
    }

};