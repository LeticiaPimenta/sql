<?php 
class FirebaseWrapperTest extends \Codeception\Test\Unit
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
    /*    $produto = array(
                    [0] => Array
                        (
                            ["CODE"] => 8
                            ["PRESENTATION_NAME"] => "Sanduiche natural com queijo e presunto"
                            ["VALUE"] => 14
                            ["done"] => true
                            ["obs"] => "queijo"
                            ["key"] => -"LgQxO3pSoEyuTxGtN9Z"
                        )

                    [1] => Array
                        (
                            ["CODE"] => 8
                            ["PRESENTATION_NAME"] => "Sanduiche natural com queijo e presunto"
                            ["VALUE"] => 14
                            ["done"] => true
                            ["obs"] => "queijo"
                            ["key"] => -"LgQxO3pSoEyuTxGtN9Z"
                        )
                    ); 

        Array
(
    [-LgQxO3pSoEyuTxGtN9Z] => Array
        (
            [hash_user] => 647b14a36764fb6e38a2d424b08d209a
            [hora] => 1559542206
            [products] => Array
                (
                    [0] => Array
                        (
                            [CODE] => 8
                            [PRESENTATION_NAME] => Sanduiche natural com queijo e presunto
                            [VALUE] => 14
                        )

                )

            [shop] => 1
            [user] => leticia@test
        )

    [-LgQz441mjqavY2hTJvq] => Array
        (
            [hash_user] => 647b14a36764fb6e38a2d424b08d209a
            [hora] => 1559542648
            [products] => Array
                (
                    [0] => 
                    [1] => 
                    [2] => Array
                        (
                            [CODE] => 7
                            [PRESENTATION_NAME] => Açai com mel
                            [VALUE] => 11
                        )

                    [3] => Array
                        (
                            [CODE] => 2
                            [PRESENTATION_NAME] => Sanduiche natural com queijo
                            [VALUE] => 14
                        )

                )

            [shop] => 1
            [user] => leticia@test
        )

)

                    */

        $endereco_produto = "https://console.firebase.google.com/project/benjamin-a-padaria/database/benjamin-a-padaria/data/users/647b14a36764fb6e38a2d424b08d209a/retirar/-LgQxO3pSoEyuTxGtN9Z/products/0" ;

        $key_compra = "-LgQxO3pSoEyuTxGtN9Z";
        $code_produto = 0 ;
        $firebase_wrapper = new \App\Classes\FirebaseWrapper;

        $endereco_retornado = $firebase_wrapper->retorna_url($key_compra,$code_produto) ;

        $this->assertEquals($endereco_produto,$endereco_retornado);
    }
}