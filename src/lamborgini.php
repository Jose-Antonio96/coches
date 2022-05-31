<?php
    include_once "coche.php";
class lamborgini extends coche{
    private array $estados=["parado", "encendido", "muy rapido"];
    public function __construct($color, $numruedas)
    {
        parent::__construct("lamborgini", $color, $numruedas);
    }
    
    public function ruido(){
        $ruidos=["parado"=>"Silencio", "encendido"=>"RUUUUUUUUUUUUUUUUUUUUUUUUN", "muy rapido"=>"BRRRRRRRRRRRRRRRRRRUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUM"];
        return $ruidos[$this->estadoActual];
    }

    public function velocidad(){
        return $this->potmotor*800;
    }

}