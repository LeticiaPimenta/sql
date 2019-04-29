<?php 
class paymentTest extends \Codeception\Test\Unit
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
    public function testRegistrarUmaCompra()
    {
       $json_cart = '{"user":"ce11fce876c93ed5d2a72da660496473","cart":[{"CODE":6,"PRESENTATION_NAME":"Mini Croissant Chocolate","VALUE":2.99},{"CODE":7,"PRESENTATION_NAME":"Açai com mel","VALUE":11},{"CODE":6,"PRESENTATION_NAME":"Mini Croissant Chocolate","VALUE":2.99},{"CODE":3,"PRESENTATION_NAME":"Ben Almoço do dia","VALUE":17}],"method":"paypal"}';

        $pagamento = new \App\Classes\Payment;

        print_r($pagamento->register($json_cart));
        die();
    }
}