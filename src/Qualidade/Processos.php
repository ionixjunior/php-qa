<?php

namespace Qualidade;

use Exception;

class Processos
{

    public function processo1($var1, $var2)
    {
        if (is_null($var1)) {
            throw new Exception();
        }
        
        if (is_null($var2)) {
            throw new Exception();
        }
        
        return $var1 + $var2;
    }
    
    public function processo2($var1, $var2, $var3)
    {
        if (is_null($var1)) {
            throw new Exception();
        }
        
        if (is_null($var2)) {
            throw new Exception();
        }
        
        if (   is_null($var3)
            || $var3 === 0
        ) {
            throw new Exception();
        }
        
        return ($var1 + $var2) / $var3;
    }
    
}
