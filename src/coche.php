<?php

class coche {
    private string $marca;
    private string $color;
    private int $numruedas;
    private float $potmotor;
    private array $estados=["parado", "encendido", "andando"];
    private int $estadoActual;
    private static $numcoches; //pertenece a la clase

    public function __construct(string $marca, string $color, int $numruedas)
    //En el constructor no se cambia el estado sino que se le da identidad
    {
        $this-> marca = $marca;
        $this-> color = $color; 
        $this-> numruedas = $numruedas;
        $this-> potmotor = 0;
        $this-> estadoActual = 0;
        self::$numcoches++;
    }

    public function __destruct(){
        self::$numcoches--;
        echo "uno menos";
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
        return self::$numcoches . " " .$ruidos[$this->estadoActual];
    }
    //El ruido va ligado al estado del motor

    public function velocidad(){
        return $this->potmotor;
    }

    public function getEstado(){
        return $this->estados[$this->estadoActual];
    }

}

