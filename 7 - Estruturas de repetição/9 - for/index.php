<?php

    $j = 0;
    $nome = "pharah" . "<br>";
    //Contador; Condição; Incremento/Decremento
    for($i = 0; $i < 10; $i++) {
        echo "testando o for $i" . "<br>";
        if ($i == 4) {
            echo "$nome";
        }
        if ($i == 8) {
            break;
        }
    }
?>