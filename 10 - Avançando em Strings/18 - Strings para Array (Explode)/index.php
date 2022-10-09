<?php
    $frase = "Testando o Explode";

    $fraseArray = explode(" ", $frase);

    print_r($fraseArray);

    echo "<br>";

    $fraseArray2 = explode(",", $frase);

    print_r($fraseArray2);

    echo "<br>";

    $fraseB = "Carro, Avião, Barco, Navio";
    $fraseB_Array = explode(",",$fraseB);
    print_r($fraseB);








?>