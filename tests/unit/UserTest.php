<?php 
class UserTest extends \Codeception\Test\Unit
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
    public function testDeveBuscarOUsuarioPeloToken()
    {
        $usuario  =  new \App\Classes\User;
        print_r($usuario::all());
        print_r($usuario);
        die();
    }
}