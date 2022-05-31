<?php
    include_once "coche.php";
class ferrari extends coche{
    private array $estados=["parado", "encendido", "muy rapido"];
    public function __construct($color, $numruedas)
    {
        parent::__construct("ferrari", $color, $numruedas);
        }
    
    public function ruido(){
        $ruidos=["parado" =>"Silencio", "encendido"=>"RUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUN", "muy rapido"=>"BRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUM"];
        return $ruidos[$this->getEstado()];
    }
    

    public function velocidad(){
        return $this->potmotor*1000;
    }

}