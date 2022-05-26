<?php
    include_once "coche.php";
    $micoche = new coche("ferrari", "negro", 4);
    $micoche->arrancar();
    echo $micoche->ruido() . "\n";
    $micoche->acelerar(40);
    echo $micoche->ruido() . "\n";
    $micoche->frenar(20);
    echo $micoche->ruido() .  "\n";

    $micoche2 = new coche("Porsche", "rojo", 3);
    $micoche->arrancar();
    echo $micoche->ruido() . "\n";
    $micoche->acelerar(40);
    echo $micoche->ruido() . "\n";
    $micoche->frenar(20);
    echo $micoche->ruido() .  "\n";

    echo $micoche->ruido() . "\n";
    unset($micoche2);