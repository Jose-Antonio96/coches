<?php
    include_once "coche.php";
class lamborgini extends coche{
    private array $estados=["parado", "encendido", "muy rapido"];
    public function __construct($color, $numruedas)
    {
        parent::__construct("lamborgini", $color, $numruedas);
    }
    
    public function ruido(){
        $ruidos=["Silencio", "RUUUUUUUUUUUUUUUUUUUUUUUUN", "BRRRRRRRRRRRRRRRRRRUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUM"];
        return $ruidos[$this->estadoActual];
    }

    public function velocidad(){
        echo "Num coches " . coche::numcoches();
        return $this->potmotor*800;
    }

}