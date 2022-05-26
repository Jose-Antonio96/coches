<?php
    include_once "ferrari.php";
    include_once "lamborgini.php";
    include_once "maserati.php";
    include_once "coche.php";
    $micoche = new ferrari("negro", 4);
    $micoche->arrancar();
    echo $micoche->ruido() . "\n";
    $micoche->acelerar(400000);
    echo $micoche->ruido() . "\n";
    $micoche->frenar(200000);
    echo $micoche->ruido() .  "\n";

    $micoche2 = new coche("Porsche", "rojo", 3);
    $micoche2->arrancar();
    echo $micoche2->ruido() . "\n";
    $micoche2->acelerar(40);
    echo $micoche2->ruido() . "\n";
    $micoche2->frenar(20);
    echo $micoche2->ruido() .  "\n";

    echo $micoche2->ruido() . "\n";
    unset($micoche2);

    echo "Num coches " . coche::numcoches(). "\n";


    echo "Coches " . coche::apagarcoches() . "\n";

    echo "Coches " . coche::endencercoches() . "\n";

    $ferrari = new ferrari("rojo", 4);
    echo $ferrari-> imprimircoche();