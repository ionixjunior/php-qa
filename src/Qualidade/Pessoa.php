<?php

namespace Qualidade;

class Pessoa
{

    private $nome;
    
    private $sobrenome;
    
    private $ultimoNome;
    
    public function getNomeCompleto()
    {
        return sprintf('%s %s %s', $this->getNome(), $this->getSobrenome(), $this->getUltimoNome());
    }
    
    public function getNome()
    {
        return $this->nome;
    }

    public function getSobrenome()
    {
        return $this->sobrenome;
    }
    
    public function getUltimoNome()
    {
        
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function setSobrenome($sobrenome)
    {
        $this->sobrenome = $sobrenome;
    }
    
    public function setUltimoNome($ultimoNome)
    {
        $this->ultimoNome = $ultimoNome;
    }

}
