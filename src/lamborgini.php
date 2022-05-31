<?php
    include_once "coche.php";
class lamborgini extends coche{
    private array $estados=["parado", "encendido", "muy rapido"];
    public function __construct($color, $numruedas)
    {
        parent::__construct("lamborgini", $color, $numruedas);
        $this->acelerar(40);
    }
    
    public function ruido(){
        $ruidos=["parado"=>"Silencio", "encendido"=>"RUUUUUUUUUUUUUUUUUUUUUUUUN", "muy rapido"=>"BRRRRRRRRRRRRRRRRRRUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUM"];
        return $ruidos[$this->getEstado($this->estados)];
    }

    public function velocidad():float{
        return $this->potmotor*800;
    }

}