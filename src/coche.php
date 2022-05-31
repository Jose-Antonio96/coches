<?php

class coche {
    private string $marca;
    private string $color;
    private int $numruedas;
    private float $potmotor;
    private array $estados=["parado", "encendido", "andando"];
    private int $estadoActual;
    private static $numcoches=0; //pertenece a la clase
    private static $instances=[];

    public function __construct(string $marca, string $color, int $numruedas)
    //En el constructor no se cambia el estado sino que se le da identidad
    {
        $this-> marca = $marca;
        $this-> color = $color; 
        $this-> numruedas = $numruedas;
        $this-> potmotor = 0;
        $this-> estadoActual = 0;
        self::$numcoches++;
        self::$instances[]=$this;
    }

    public function __destruct(){
        self::$numcoches--;
        echo "uno menos";
    }

    public static function apagarcoches(){
        foreach(self::$instances as $coche)
            $coche->setEstado(0);
        return "apagados";
    }

    public static function endencercoches(){
        foreach(self::$instances as $coche)
            $coche->setEstado(1);
        return "encendidos";
    }
    /*Método protegido que me diga el numero de coches en ese momento*/
    public static function numcoches(){
        return self::$numcoches;
    }

    public function arrancar(){
        $this-> estadoActual=1;
    }

    public function parar(){
        $this-> estadoActual=0;
    }

    public function frenar($unidad){
        $this->potmotor -=$unidad;

        $this->estadoActual=$this->potmotor<0?0:($this->potmotor==0?1:2);
    }

    public function acelerar($unidad){
        $this->potmotor +=$unidad;

        $this->estadoActual=$this->potmotor>0?2:1;
    }

    public function ruido(){
        $ruidos=["Silencio", "runrun", "brummmmm"];
        return $ruidos[$this->estadoActual];
    }
    //El ruido va ligado al estado del motor

    public function velocidad(){
        return $this->potmotor;
    }

    public function getEstado(){
        return $this->estados[$this->estadoActual];
    }

    public function setEstado($estado){
        $this->estadoActual=$estado;
    }

    public function imprimircoche():string{
        return "Marca: " . $this->marca . "\n" . " Color: " . $this->color . "\n" . " Numero de ruedas: " .  $this->numruedas . "\n" . " Potencia del motor: " . $this->potmotor . "\n" . " Estado: " . $this->getEstado() . "\n";
    }

    public function getmarca(){
        return $this->marca;
    }

    public function getcolor():string{
        return $this->color;
    }

    public function getnumruedas():int{
        return $this->numruedas;
    }

}

