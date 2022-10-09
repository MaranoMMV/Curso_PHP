<?php

    $a = 1;
    $b = "1";

    if ($a != $b){
        echo "A é diferente de B 1";
    }
    echo "<br>";
    if ($a !== $b){
        echo "A é diferente de B 1";
    }
    echo "<br>";
    if (1 !== 2){
        echo "1 é diferente de 2";
    }
    echo "<br>";
    if (1 !== "1") {
        echo "um numero é diferente de um numero com uma string";
    }
    echo "<br>";
    if ([] !== "") {
        echo "uma array é diferente de um valor null ou nulo";
    }


?>