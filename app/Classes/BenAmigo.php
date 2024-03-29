<?php

namespace App\Classes;


class BenAmigo
{
    private $type = array('request','receiver');
    
    public function conectar_benamigos($eu , $amigo ){
      //echo $codigo; 
      $benamigo = new \App\BenAmigo;
      $benamigo->eu = $eu;
      $benamigo->amigo = $amigo; 
      $benamigo->relationship = 1;
      $benamigo->status = 1;
      $benamigo->save();

    }

    public function listar_amigos($codigo ){
      $eus = \App\BenAmigo::where('eu',$codigo)->get()->toArray();
      $amigos = \App\BenAmigo::where('amigo',$codigo)->get()->toArray(); 

      $parents = \App\User::where('parent_user',$codigo)->get()->toArray(); 
      $meu_user = \App\User::where('user_token',$codigo)->first()->toArray(); 



      $meus_bens = array();

      if($meu_user['parent_user'] !=""){
        try {
          if($meu_ben_amigo = \App\User::where('user_token',$meu_user['parent_user'])->first()){
            $meu_ben_amigo = $meu_ben_amigo->toArray();
            $meus_bens[] = array(
              'nome' => $meu_ben_amigo['name'],
              'email' => $meu_ben_amigo['email'],
              'user_token' => $meu_ben_amigo['user_token'] 
            );
          }
          
        } catch (Exception $e) {
          print_r($e->getMessage());
        }
      

      }


      foreach ($parents as $parent) {
        
        $meus_bens[] = array(
          'nome' => $parent['name'],
          'email' => $parent['email'],
          'user_token' => $parent['user_token'] 
        );

      }

      //$result = array_merge($eus, $amigos);
      foreach ($eus as $eu) {
      	$eu_ben_amigo = \App\User::where('user_token',$eu['amigo'])->first()->toArray();
      	$meus_bens[] = array(
      		'nome' => $eu_ben_amigo['name'],
      		'email' => $eu_ben_amigo['email'],
      		'user_token' => $eu_ben_amigo['user_token'] 
      	);

      }

      foreach ($amigos as $amigo) {
        $eu_ben_amigo = \App\User::where('user_token',$amigo['eu'])->first();
        if($eu_ben_amigo){
        	$eu_ben_amigo_array = $eu_ben_amigo->toArray();
        	$meus_bens[] = array(
        		'nome' => $eu_ben_amigo_array['name'],
        		'email' => $eu_ben_amigo_array['email'],
        		'user_token' => $eu_ben_amigo_array['user_token'] 
        	);
          
        }

      }
      
      return $meus_bens;
    }

}
