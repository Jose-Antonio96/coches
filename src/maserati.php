<?php
    include_once "coche.php";
class maserati extends coche{
    private array $estados=["parado", "encendido", "bastante rapido"];
    public function __construct($color, $numruedas)
    {
        parent::__construct("maserati", $color, $numruedas);
    }
    
    public function ruido(){
        $ruidos=["Silencio", "RUUUUUUUUUUUUUUUN", "BRRRRRRRRRRRRUUUUUUUUUUUUUUUUUM"];
        return $ruidos[$this->estadoActual];
    }

    public function velocidad(){
        echo "Num coches " . coche::numcoches();
        return $this->potmotor*600;
    }

}