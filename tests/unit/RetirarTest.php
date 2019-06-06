<?php 
class RetirarTest extends \Codeception\Test\Unit
{
    /**
     * @var \UnitTester
     */
    protected $tester;
    
    protected function _before()
    {
    }

    protected function _after()
    {
    }



    // tests
    public function testDeveMeTrazerOEnderecoCorreto()
    {
    	$endereco_produto = '{"-Lg_Gu5tqEoaF50FTG3l":{"hash_user":"6f7276a7c8ce4f5ca0950eb0a97cc470","hora":"1559698578","products":[{"CODE":"1","PRESENTATION_NAME":"A\u00e7ai com bananas","VALUE":"10"},{"CODE":"7","PRESENTATION_NAME":"A\u00e7ai com mel","VALUE":"11"},{"CODE":"2","PRESENTATION_NAME":"Sanduiche natural com queijo","VALUE":"14"},{"CODE":"8","PRESENTATION_NAME":"Sanduiche natural com queijo e presunto","VALUE":"14"},{"CODE":"10","PRESENTATION_NAME":"Sanduiche natural com queijo , presunto , tomate e tomate","VALUE":"14.9"}],"shop":"1","user":"daniel@email"},"-LgaVYep0WZCcXG8zkLT":{"hash_user":"6f7276a7c8ce4f5ca0950eb0a97cc470","hora":"1559719196","products":[{"CODE":"1","PRESENTATION_NAME":"A\u00e7ai com bananas","VALUE":"10","done":"true"},{"CODE":"7","PRESENTATION_NAME":"A\u00e7ai com mel","VALUE":"11","done":"true"},{"CODE":"2","PRESENTATION_NAME":"Sanduiche natural com queijo","VALUE":"14","done":"true"}],"shop":"1","user":"daniel@email"},"-Lgabjel-ge4abckQD2R":{"hash_user":"6f7276a7c8ce4f5ca0950eb0a97cc470","hora":"1559721080","products":[{"CODE":"10","PRESENTATION_NAME":"Sanduiche natural com queijo , presunto , tomate e tomate","VALUE":"14.9"}],"shop":"1","user":"daniel@email"},"-Lgea6-Me9ZsXvS0OIf3":{"hash_user":"6f7276a7c8ce4f5ca0950eb0a97cc470","hora":"1559787758","products":{"3":{"CODE":"8","PRESENTATION_NAME":"Sanduiche natural com queijo e presunto","VALUE":"14"}},"shop":"1","user":"daniel@email"},"$$hashKey":"object:7"}';

    	$array_produtos = 'Array
(
    [-Lg_Gu5tqEoaF50FTG3l] => Array
        (
            [hash_user] => 6f7276a7c8ce4f5ca0950eb0a97cc470
            [hora] => 1559698578
            [products] => Array
                (
                    [0] => Array
                        (
                            [CODE] => 1
                            [PRESENTATION_NAME] => Açai com bananas
                            [VALUE] => 10
                        )

                    [1] => Array
                        (
                            [CODE] => 7
                            [PRESENTATION_NAME] => Açai com mel
                            [VALUE] => 11
                        )

                    [2] => Array
                        (
                            [CODE] => 2
                            [PRESENTATION_NAME] => Sanduiche natural com queijo
                            [VALUE] => 14
                        )

                    [3] => Array
                        (
                            [CODE] => 8
                            [PRESENTATION_NAME] => Sanduiche natural com queijo e presunto
                            [VALUE] => 14
                        )

                    [4] => Array
                        (
                            [CODE] => 10
                            [PRESENTATION_NAME] => Sanduiche natural com queijo , presunto , tomate e tomate
                            [VALUE] => 14.9
                        )

                )

            [shop] => 1
            [user] => daniel@email
        )

    [-LgaVYep0WZCcXG8zkLT] => Array
        (
            [hash_user] => 6f7276a7c8ce4f5ca0950eb0a97cc470
            [hora] => 1559719196
            [products] => Array
                (
                    [0] => Array
                        (
                            [CODE] => 1
                            [PRESENTATION_NAME] => Açai com bananas
                            [VALUE] => 10
                            [done] => true
                        )

                    [1] => Array
                        (
                            [CODE] => 7
                            [PRESENTATION_NAME] => Açai com mel
                            [VALUE] => 11
                            [done] => true
                        )

                    [2] => Array
                        (
                            [CODE] => 2
                            [PRESENTATION_NAME] => Sanduiche natural com queijo
                            [VALUE] => 14
                            [done] => true
                        )

                )

            [shop] => 1
            [user] => daniel@email
        )

    [-Lgabjel-ge4abckQD2R] => Array
        (
            [hash_user] => 6f7276a7c8ce4f5ca0950eb0a97cc470
            [hora] => 1559721080
            [products] => Array
                (
                    [0] => Array
                        (
                            [CODE] => 10
                            [PRESENTATION_NAME] => Sanduiche natural com queijo , presunto , tomate e tomate
                            [VALUE] => 14.9
                        )

                )

            [shop] => 1
            [user] => daniel@email
        )

    [-Lgea6-Me9ZsXvS0OIf3] => Array
        (
            [hash_user] => 6f7276a7c8ce4f5ca0950eb0a97cc470
            [hora] => 1559787758
            [products] => Array
                (
                    [3] => Array
                        (
                            [CODE] => 8
                            [PRESENTATION_NAME] => Sanduiche natural com queijo e presunto
                            [VALUE] => 14
                        )

                )

            [shop] => 1
            [user] => daniel@email
        )

    [$$hashKey] => object:7
)';

$retorno = 'Array
(
    [-Lg_Gu5tqEoaF50FTG3l] => Array
        (
            [hash_user] => 6f7276a7c8ce4f5ca0950eb0a97cc470
            [hora] => 1559698578
            [products] => Array
                (
                    [0] => Array
                        (
                            [CODE] => 1
                            [PRESENTATION_NAME] => Açai com bananas
                            [VALUE] => 10
                        )

                    [1] => Array
                        (
                            [CODE] => 7
                            [PRESENTATION_NAME] => Açai com mel
                            [VALUE] => 11
                        )

                    [2] => Array
                        (
                            [CODE] => 2
                            [PRESENTATION_NAME] => Sanduiche natural com queijo
                            [VALUE] => 14
                        )

                    [3] => Array
                        (
                            [CODE] => 8
                            [PRESENTATION_NAME] => Sanduiche natural com queijo e presunto
                            [VALUE] => 14
                        )

                    [4] => Array
                        (
                            [CODE] => 10
                            [PRESENTATION_NAME] => Sanduiche natural com queijo , presunto , tomate e tomate
                            [VALUE] => 14.9
                        )

                )

            [shop] => 1
            [user] => daniel@email
        )

    [-LgaVYep0WZCcXG8zkLT] => Array
        (
            [hash_user] => 6f7276a7c8ce4f5ca0950eb0a97cc470
            [hora] => 1559719196
            [products] => Array
                (
                    [0] => Array
                        (
                            [CODE] => 1
                            [PRESENTATION_NAME] => Açai com bananas
                            [VALUE] => 10
                            [done] => true
                        )

                    [1] => Array
                        (
                            [CODE] => 7
                            [PRESENTATION_NAME] => Açai com mel
                            [VALUE] => 11
                            [done] => true
                        )

                    [2] => Array
                        (
                            [CODE] => 2
                            [PRESENTATION_NAME] => Sanduiche natural com queijo
                            [VALUE] => 14
                            [done] => true
                        )

                )

            [shop] => 1
            [user] => daniel@email
        )

    [-Lgabjel-ge4abckQD2R] => Array
        (
            [hash_user] => 6f7276a7c8ce4f5ca0950eb0a97cc470
            [hora] => 1559721080
            [products] => Array
                (
                    [0] => Array
                        (
                            [CODE] => 10
                            [PRESENTATION_NAME] => Sanduiche natural com queijo , presunto , tomate e tomate
                            [VALUE] => 14.9
                        )

                )

            [shop] => 1
            [user] => daniel@email
        )

    [-Lgea6-Me9ZsXvS0OIf3] => Array
        (
            [hash_user] => 6f7276a7c8ce4f5ca0950eb0a97cc470
            [hora] => 1559787758
            [products] => Array
                (
                    [3] => Array
                        (
                            [CODE] => 8
                            [PRESENTATION_NAME] => Sanduiche natural com queijo e presunto
                            [VALUE] => 14
                        )

                )

            [shop] => 1
            [user] => daniel@email
        )

    [$$hashKey] => object:7
)';

        $this->assertEquals($array_produtos,$retorno);
    }




/*

Array
(
    [-Lg_Gu5tqEoaF50FTG3l] => Array
        (
            [hash_user] => 6f7276a7c8ce4f5ca0950eb0a97cc470
            [hora] => 1559698578
            [products] => Array
                (
                    [0] => Array
                        (
                            [CODE] => 1
                            [PRESENTATION_NAME] => Açai com bananas
                            [VALUE] => 10
                        )

                    [1] => Array
                        (
                            [CODE] => 7
                            [PRESENTATION_NAME] => Açai com mel
                            [VALUE] => 11
                        )

                    [2] => Array
                        (
                            [CODE] => 2
                            [PRESENTATION_NAME] => Sanduiche natural com queijo
                            [VALUE] => 14
                        )

                    [3] => Array
                        (
                            [CODE] => 8
                            [PRESENTATION_NAME] => Sanduiche natural com queijo e presunto
                            [VALUE] => 14
                        )

                    [4] => Array
                        (
                            [CODE] => 10
                            [PRESENTATION_NAME] => Sanduiche natural com queijo , presunto , tomate e tomate
                            [VALUE] => 14.9
                        )

                )

            [shop] => 1
            [user] => daniel@email
        )

    [-LgaVYep0WZCcXG8zkLT] => Array
        (
            [hash_user] => 6f7276a7c8ce4f5ca0950eb0a97cc470
            [hora] => 1559719196
            [products] => Array
                (
                    [0] => Array
                        (
                            [CODE] => 1
                            [PRESENTATION_NAME] => Açai com bananas
                            [VALUE] => 10
                            [done] => true
                        )

                    [1] => Array
                        (
                            [CODE] => 7
                            [PRESENTATION_NAME] => Açai com mel
                            [VALUE] => 11
                            [done] => true
                        )

                    [2] => Array
                        (
                            [CODE] => 2
                            [PRESENTATION_NAME] => Sanduiche natural com queijo
                            [VALUE] => 14
                            [done] => true
                        )

                )

            [shop] => 1
            [user] => daniel@email
        )

    [-Lgabjel-ge4abckQD2R] => Array
        (
            [hash_user] => 6f7276a7c8ce4f5ca0950eb0a97cc470
            [hora] => 1559721080
            [products] => Array
                (
                    [0] => Array
                        (
                            [CODE] => 10
                            [PRESENTATION_NAME] => Sanduiche natural com queijo , presunto , tomate e tomate
                            [VALUE] => 14.9
                        )

                )

            [shop] => 1
            [user] => daniel@email
        )

    [-Lgea6-Me9ZsXvS0OIf3] => Array
        (
            [hash_user] => 6f7276a7c8ce4f5ca0950eb0a97cc470
            [hora] => 1559787758
            [products] => Array
                (
                    [3] => Array
                        (
                            [CODE] => 8
                            [PRESENTATION_NAME] => Sanduiche natural com queijo e presunto
                            [VALUE] => 14
                        )

                )

            [shop] => 1
            [user] => daniel@email
        )

    [$$hashKey] => object:7
)
*/


public function testRetiraProduto()
{
	$produtos_servidor = '{"-Lg_Gu5tqEoaF50FTG3l":{"hash_user":"6f7276a7c8ce4f5ca0950eb0a97cc470","hora":1559698578,"products":[{"CODE":1,"PRESENTATION_NAME":"Açai com bananas","VALUE":10},{"CODE":7,"PRESENTATION_NAME":"Açai com mel","VALUE":11},{"CODE":2,"PRESENTATION_NAME":"Sanduiche natural com queijo","VALUE":14},{"CODE":8,"PRESENTATION_NAME":"Sanduiche natural com queijo e presunto","VALUE":14},{"CODE":10,"PRESENTATION_NAME":"Sanduiche natural com queijo , presunto , tomate e tomate","VALUE":14.9}],"shop":1,"user":"daniel@email"},"-LgaVYep0WZCcXG8zkLT":{"hash_user":"6f7276a7c8ce4f5ca0950eb0a97cc470","hora":1559719196,"products":[{"CODE":1,"PRESENTATION_NAME":"Açai com bananas","VALUE":10},{"CODE":7,"PRESENTATION_NAME":"Açai com mel","VALUE":11},{"CODE":2,"PRESENTATION_NAME":"Sanduiche natural com queijo","VALUE":14}],"shop":1,"user":"daniel@email"},"-Lgabjel-ge4abckQD2R":{"hash_user":"6f7276a7c8ce4f5ca0950eb0a97cc470","hora":1559721080,"products":[{"CODE":10,"PRESENTATION_NAME":"Sanduiche natural com queijo , presunto , tomate e tomate","VALUE":14.9}],"shop":1,"user":"daniel@email"},"-Lgea6-Me9ZsXvS0OIf3":{"hash_user":"6f7276a7c8ce4f5ca0950eb0a97cc470","hora":1559787758,"products":{"3":{"CODE":8,"PRESENTATION_NAME":"Sanduiche natural com queijo e presunto","VALUE":14}},"shop":1,"user":"daniel@email"}}';

	$produtos_retirar = '{"-Lg_Gu5tqEoaF50FTG3l":{"hash_user":"6f7276a7c8ce4f5ca0950eb0a97cc470","hora":"1559698578","products":[{"CODE":"1","PRESENTATION_NAME":"A\u00e7ai com bananas","VALUE":"10"},{"CODE":"7","PRESENTATION_NAME":"A\u00e7ai com mel","VALUE":"11"},{"CODE":"2","PRESENTATION_NAME":"Sanduiche natural com queijo","VALUE":"14"},{"CODE":"8","PRESENTATION_NAME":"Sanduiche natural com queijo e presunto","VALUE":"14"},{"CODE":"10","PRESENTATION_NAME":"Sanduiche natural com queijo , presunto , tomate e tomate","VALUE":"14.9"}],"shop":"1","user":"daniel@email"},"-LgaVYep0WZCcXG8zkLT":{"hash_user":"6f7276a7c8ce4f5ca0950eb0a97cc470","hora":"1559719196","products":[{"CODE":"1","PRESENTATION_NAME":"A\u00e7ai com bananas","VALUE":"10","done":"true"},{"CODE":"7","PRESENTATION_NAME":"A\u00e7ai com mel","VALUE":"11","done":"true"},{"CODE":"2","PRESENTATION_NAME":"Sanduiche natural com queijo","VALUE":"14","done":"true"}],"shop":"1","user":"daniel@email"},"-Lgabjel-ge4abckQD2R":{"hash_user":"6f7276a7c8ce4f5ca0950eb0a97cc470","hora":"1559721080","products":[{"CODE":"10","PRESENTATION_NAME":"Sanduiche natural com queijo , presunto , tomate e tomate","VALUE":"14.9"}],"shop":"1","user":"daniel@email"},"-Lgea6-Me9ZsXvS0OIf3":{"hash_user":"6f7276a7c8ce4f5ca0950eb0a97cc470","hora":"1559787758","products":{"3":{"CODE":"8","PRESENTATION_NAME":"Sanduiche natural com queijo e presunto","VALUE":"14"}},"shop":"1","user":"daniel@email"},"$$hashKey":"object:7"}';

	$produtos_retirar_sem_done = '{"-Lg_Gu5tqEoaF50FTG3l":{"hash_user":"6f7276a7c8ce4f5ca0950eb0a97cc470","hora":"1559698578","products":[{"CODE":"1","PRESENTATION_NAME":"A\u00e7ai com bananas","VALUE":"10"},{"CODE":"7","PRESENTATION_NAME":"A\u00e7ai com mel","VALUE":"11"},{"CODE":"2","PRESENTATION_NAME":"Sanduiche natural com queijo","VALUE":"14"},{"CODE":"8","PRESENTATION_NAME":"Sanduiche natural com queijo e presunto","VALUE":"14"},{"CODE":"10","PRESENTATION_NAME":"Sanduiche natural com queijo , presunto , tomate e tomate","VALUE":"14.9"}],"shop":"1","user":"daniel@email"},"-LgaVYep0WZCcXG8zkLT":{"hash_user":"6f7276a7c8ce4f5ca0950eb0a97cc470","hora":"1559719196","products":[{"CODE":"1","PRESENTATION_NAME":"A\u00e7ai com bananas","VALUE":"10"},{"CODE":"7","PRESENTATION_NAME":"A\u00e7ai com mel","VALUE":"11"},{"CODE":"2","PRESENTATION_NAME":"Sanduiche natural com queijo","VALUE":"14"}],"shop":"1","user":"daniel@email"},"-Lgabjel-ge4abckQD2R":{"hash_user":"6f7276a7c8ce4f5ca0950eb0a97cc470","hora":"1559721080","products":[{"CODE":"10","PRESENTATION_NAME":"Sanduiche natural com queijo , presunto , tomate e tomate","VALUE":"14.9"}],"shop":"1","user":"daniel@email"},"-Lgea6-Me9ZsXvS0OIf3":{"hash_user":"6f7276a7c8ce4f5ca0950eb0a97cc470","hora":"1559787758","products":{"3":{"CODE":"8","PRESENTATION_NAME":"Sanduiche natural com queijo e presunto","VALUE":"14"}},"shop":"1","user":"daniel@email"},"$$hashKey":"object:7"}';


	$tratado = json_decode($produtos_retirar,true);

	unset($tratado['$$hashKey']);
	$dados['user_email'] = 'daniel@email';
	$dados['loja'] = 1;
	$array_produtos_servidor = json_decode($produtos_servidor,true);
	$produtos_atendimento = array();

	foreach ($tratado as $key => $compras) {
		foreach ($compras as $compra => $products) {
			//
			//if(isset($products['done']))
			if (isset($products) && is_array($products)) {
				# code...
				foreach ($products as $produto) {
					if(isset($produto['done'])){
						//print_r($key);
						//print_r($produto);
						$FIREBASE = "https://benjamin-a-padaria.firebaseio.com/users/".md5($dados['user_email'])."/retirar/".$key."/products/";
						
						if (is_array($array_produtos_servidor[$key]['products'])) {
							foreach ($array_produtos_servidor[$key]['products'] as $codigo => $itens) {
								//print_r($codigo);
								if(isset($produto['CODE']) && $produto['CODE'] == $itens['CODE']){
									//print_r($codigo);

									$NODE_DELETE = $codigo.".json";


									//echo $FIREBASE.$NODE_DELETE;

									$obs = isset($itens['obs'])?$itens['obs']:'';
                            $produtos_atendimento[] = array('CODE' => $itens['CODE'],
                                        'PRESENTATION_NAME'=>  $itens['PRESENTATION_NAME'],
                                        'VALUE'=>$itens['VALUE'],
                                        'OBS'=>$obs);
                            $NODE_DELETE = $key.".json";

                     /*       $curl = curl_init();

                             curl_setopt( $curl, CURLOPT_URL, $FIREBASE .'products/'. $NODE_DELETE );
                             curl_setopt( $curl, CURLOPT_CUSTOMREQUEST, "DELETE" );
                            curl_setopt( $curl, CURLOPT_RETURNTRANSFER, true );

                            $response = curl_exec( $curl );
                            curl_close( $curl );*/
                            break;

								}
							}
						}
					}

				}
			}

		}
	}
	//print_r($produtos_atendimento);
	$atendimento = array('user_email' => $dados['user_email'],
                            'user_hash' => md5($dados['user_email']),
                            'shop'=> $dados['loja'],
                            'products'=>$produtos_atendimento,
                            'tid'=>(new \DateTime())->getTimestamp(),
                            'hora'=> (new \DateTime())->getTimestamp());

        $json = json_encode( $atendimento );
        print_r($json);

        $FIREBASE = "https://benjamin-a-padaria.firebaseio.com/atendimentos/".$dados['loja']."/".md5($dados['user_email'])."/".(new \DateTime())->getTimestamp();
        $NODE_PUT = ".json";
        echo $FIREBASE . $NODE_PUT ;
      /*  $curl = curl_init();
        curl_setopt( $curl, CURLOPT_URL, $FIREBASE . $NODE_PUT );
        curl_setopt( $curl, CURLOPT_CUSTOMREQUEST, "PUT" );
        curl_setopt( $curl, CURLOPT_POSTFIELDS, $json );
        curl_setopt( $curl, CURLOPT_RETURNTRANSFER, true );
        $response = curl_exec( $curl );
        curl_close( $curl );*/
	die();

	//die();

		$this->assertEquals($array_produtos_servidor,$tratado);

}

}
?>