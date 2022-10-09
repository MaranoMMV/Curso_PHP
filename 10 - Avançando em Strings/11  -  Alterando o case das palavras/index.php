<?php
    $frase = "testando o case de uma palavra" . "<br>";
    $frase2 =  "Testando o case de uma palavra" .  "<br>";
    $frase3 = "testando o case de uma palavra" . "<br>";

    //Primeira letra maiúsculo

    echo ucfirst($frase);
    echo ucfirst($frase2);

    //todas as palavras com a inicial maiúscula
    echo ucwords($frase3);
    echo ucwords($frase2);






?>