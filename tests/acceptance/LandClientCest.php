<?php 

class LandClientCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToTest(AcceptanceTester $I)
    {
    	$I->amOnPage('/client');
        $I->see('Meus Pedidos');
    }
}
