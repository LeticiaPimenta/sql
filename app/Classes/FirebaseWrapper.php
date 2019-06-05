<?php
namespace App\Classes;


/**
 * Description of Transfer
 *
 * @author daniel
 */
class FirebaseWrapper {
    //put your code here
    private $id =1;
    
    public function retorna_url($key_compra , $code_produto)
    {
        $endereco_retornado = sprintf("https://console.firebase.google.com/project/benjamin-a-padaria/database/benjamin-a-padaria/data/users/647b14a36764fb6e38a2d424b08d209a/retirar/%s/products/%s",$key_compra,$code_produto) ;    
        return $endereco_retornado;
    }

} 