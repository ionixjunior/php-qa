<?php

namespace Qualidade;

class Pessoa
{

    private $nome;
    
    private $sobrenome;
    
    public function getNomeCompleto()
    {
        return sprintf('%s %s', $this->getNome(), $this->getSobrenome());
    }
    
    public function getNome()
    {
        return $this->nome;
    }

    public function getSobrenome()
    {
        return $this->sobrenome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function setSobrenome($sobrenome)
    {
        $this->sobrenome = $sobrenome;
    }

}
