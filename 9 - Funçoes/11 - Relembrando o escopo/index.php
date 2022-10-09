<?php
    $a = 10;
    $b = 15;
    function teste_escopo(){
        $a = 5;

        global $b;

        $a++;

        static $c = 0;
        $c++;

        echo "escopo local de $a . <br>";
        echo "Escopo global na function de B: $b" . "<br>";
        echo "Escopo static é igual a : $c" . "<br>";
    }
    echo "escopo global de A: $b . <br>";
    teste_escopo();
    echo "escopo global de A: $a . <br>";
    echo "escopo global de A: $b . <br>";
    teste_escopo();
?>