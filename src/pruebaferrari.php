<?php
    include_once "ferrari.php";
    $micoche = new ferrari("ferrari", "negro", 4);
    $micoche->arrancar();
    echo $micoche->ruido() . "\n";
    $micoche->acelerar(40);
    echo $micoche->ruido() . "\n";
    $micoche->frenar(20);
    echo $micoche->ruido() .  "\n";
