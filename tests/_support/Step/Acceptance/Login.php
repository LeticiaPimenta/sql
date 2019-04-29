<?php
namespace Step\Acceptance;
class Login extends \AcceptanceTester{

     private $usuario, $user , $response;

      /**
     * @Given I am user
     */
     public function iAmUser()
     {
        $this->usuario = new \App\Classes\User;
        $this->usuario->email = "test@test.com";
        $this->usuario->password = "test123pass";
        $this->usuario->name = "Usuario";
//        $this->usuario->group_id = 1;
        $this->usuario->save();
        $this->user = new \App\Classes\User;
	 }



     /**
     * @When I fill in Email with :arg1 and I fill in Password with :arg2
     */
     public function iFillInEmailWithAndIFillInPasswordWith($arg1, $arg2)
     {
         $this->user->email = $arg1;
         $this->user->password = $arg2;
     }


     /**
     * @When I call login
     */
     public function iCallLogin()
     {
        $this->response = $this->user->login();
     }

    /**
     * @Then I should see :arg1
     */
     public function iShouldSee($arg1)
     {
         if($this->response == $arg1){
            return true;
        }else{
            throw new \Error("Não esta retornando o resultado ".$this->response, 1);
            
        }
     }
}
