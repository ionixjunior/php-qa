<?php

namespace Test\Qualidade;

use PHPUnit_Framework_TestCase;
use Qualidade\Pessoa;

class PessoaTest extends PHPUnit_Framework_TestCase
{

    private $pessoa;
    
    public function setUp()
    {
        $this->pessoa = new Pessoa();
    }
    
    public function tearDown()
    {
        $this->pessoa = null;
    }
    
    public function testNomeCompleto()
    {
        $this->pessoa->setNome('Ione');
        $this->pessoa->setSobrenome('Souza');
        $this->pessoa->setUltimoNome('Junior');
        
        $this->assertEquals('Ione Souza Junior', $this->pessoa->getNomeCompleto());
    }
    
}
