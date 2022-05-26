<?php
    include "coche.php";
class ferrari extends coche{

    private array $estados=["parado", "encendido", "muy rapido"];
    public function __construct($marca, $color, $numruedas)
    {
        parent::__construct($marca, $color, $numruedas);
    }
    
    public function ruido(){
        $ruidos=["Silencio", "RUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUN", "BRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUM"];
    }
    //El ruido va ligado al estado del motor

    public function velocidad(){
        return $this->potmotor*1000;
    }

}