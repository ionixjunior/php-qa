<?php

namespace Qualidade;

class Pessoa
{

    private $nome;
    
    private $sobrenome;
    
    private $ultimoNome;
    
    public function getNomeCompleto()
    {
        $nomeCompleto = '';
        
        if (empty($this->getNome()) === false) {
            $nomeCompleto .= $this->getNome() . ' ';
        }
        
        if (empty($this->getSobrenome()) === false) {
            $nomeCompleto .= $this->getSobrenome() . ' ';
        }
        
        if (empty($this->getUltimoNome()) === false) {
            $nomeCompleto .= $this->getUltimoNome() . ' ';
        }
        
        return trim($nomeCompleto);
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
