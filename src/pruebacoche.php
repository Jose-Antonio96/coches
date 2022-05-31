<?php
    include_once "ferrari.php";
    include_once "lamborgini.php";
    include_once "maserati.php";
    include_once "coche.php";
    $micoche = new ferrari("negro", 4);
    $micoche->arrancar(0);
    echo $micoche->ruido() . "\n";
    $micoche->acelerar(20);
    echo $micoche->ruido() . "\n";
    $micoche->frenar(10);
    echo $micoche->ruido() .  "\n";

    $micoche2 = new coche("Porsche", "rojo", 3);
    $micoche2->arrancar();
    echo $micoche2->ruido() . "\n";
    $micoche2->acelerar(40);
    echo $micoche2->ruido() . "\n";
    $micoche2->frenar(20);
    echo $micoche2->ruido() .  "\n";

    $micoche3 = new lamborgini("rosa", 4);
    $micoche3->arrancar();
    echo $micoche3->ruido() . "\n";
    $micoche3->acelerar(40);
    echo $micoche3->ruido() . "\n";
    $micoche3->frenar(20);
    echo $micoche3->ruido() .  "\n";

    echo $micoche3->ruido() . "\n";
    unset($micoche2);

    echo "Numero de coches es " . coche::numcoches(). "\n";


    echo "Coches " . coche::apagarcoches() . "\n";

    echo "Coches " . coche::endencercoches() . "\n";

    $ferrari = new ferrari("rojo", 4);
    echo $ferrari-> imprimircoche();