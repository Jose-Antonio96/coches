<?php
    include_once "coche.php";
class maserati extends coche{
    private array $estados=["parado", "encendido", "bastante rapido"];
    public function __construct($color, $numruedas)
    {
        parent::__construct("maserati", $color, $numruedas);
        $this->acelerar(40);
    }
    
    public function ruido(){
        $ruidos=["Silencio", "RUUUUUUUUUUUUUUUN", "BRRRRRRRRRRRRUUUUUUUUUUUUUUUUUM"];
        return $ruidos[$this->getEstado($this->estados)];
    }

    public function velocidad(){
        return $this->potmotor*600;
    }

}