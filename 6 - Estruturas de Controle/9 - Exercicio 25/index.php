<?php

    $a = 7812;
    $b = 10;
    $c = 34;
    $d = "matheus";
    $e = "marano";

    if (is_int($a)) {
        $a *= 2;
        echo "$a é um número inteiro" . "<br>";
        if ($a > 1000) {
            echo "$a é bem maior que 1000" . "<br>";
        } else {
            echo "$a é menos que 1000" . "<br>";
        }

        
    }else {
        echo "$a não é uma string";
    }