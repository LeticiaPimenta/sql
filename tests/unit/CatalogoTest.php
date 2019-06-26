<?php 
class CatalogoTest extends \Codeception\Test\Unit
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
    public function testCarregaCatalogo()
    {
        $catalogo = new \App\Classes\Catalog;
        $this->assertTrue($catalogo->carrega_catalogo('tests/_data/prods.csv'));
    }

}