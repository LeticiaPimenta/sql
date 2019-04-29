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

        $registrar = new \App\Payment;
        $registrar->name = $cart->user;
        $registrar->dados = $json_cart;
        $registrar->type = $cart->method;
        $registrar->user = $cart->user;
        $registrar->shop = 1;
        $registrar->save();

       $retirar = array();

       $retirar['hora'] =  (new \DateTime())->getTimestamp();
       $retirar['user'] =  $cart->user;
       $retirar['shop'] =  $registrar->shop;
       $retirar['products'] =  $produtos;


        $url = 'https://benjamin-a-padaria.firebaseio.com/users/'.$cart->user.'/retirar.json';
 
        //Initiate cURL.
        $ch = curl_init($url);

        //Encode the array into JSON.
        $jsonDataEncoded = json_encode($retirar);
         
        //Tell cURL that we want to send a POST request.
        curl_setopt($ch, CURLOPT_POST, 1);
         
        //Attach our encoded JSON string to the POST fields.
        curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonDataEncoded);
         
        //Set the content type to application/json
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json')); 
         
        //Execute the request
        $result = curl_exec($ch);

        return $result;

        //return $registrar->toJson();
    }

};