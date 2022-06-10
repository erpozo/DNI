<?php

namespace classes;

class dni{
    private int $numero;
    private string $letra;

    private function __construct(int $numero, string $letra){
        $this->numero = $numero;
        $this->letra = $letra;
    }

    public function __toString():string{
        return "$this->numero"."$this->letra";
    }
    
    public static function createDNI(int $numero, string $letra){
        $letra = strtoupper($letra);
        if(dni::validarDNI($numero, $letra)){
            return new dni($numero,$letra);
        }
    }
    public static function validarDNI(int $numero, string $letra):bool{
        return substr("TRWAGMYFPDXBNJZSQVHLCKE", $numero%23, 1) == $letra && strlen($letra) == 1 && strlen($numero) == 8;
    }
}

