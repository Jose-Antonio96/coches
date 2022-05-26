<?php
    include_once "coche.php";
class ferrari extends coche{
    private array $estados=["parado", "encendido", "muy rapido"];
    public function __construct($color, $numruedas)
    {
        parent::__construct("ferrari", $color, $numruedas);
    }
    
    public function ruido(){
        $ruidos=["Silencio", "RUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUN", "BRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUM"];
        return $ruidos[$this->getEstado()];
    }
    

    public function velocidad(){
        echo "Num coches " . coche::numcoches();
        return $this->potmotor*1000;
    }

}