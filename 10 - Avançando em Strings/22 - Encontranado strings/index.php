<?php

    $str = "Estamos testando o método strpos, com o strpos podemos encontrar strings" . "<br>";
    $teste_Encontrar = strpos($str, "strpos");
    echo $teste_Encontrar  . "<br>";

    $str2 = "Estamos testando o método strpos, com o strpos podemos encontrar strings" . "<br>";
    $teste_Encontrar2 = strpos($str, "java");
    echo $teste_Encontrar2  . "<br>";

    if($teste_Encontrar2 === false){
        echo "Palavra não encontrada." . "<br>";
    }

    $palavra = "com";
    $testeEncontrar3 = strpos($str, $palavra);
    echo $testeEncontrar3 . "<br>";

    $palavra2 = "to";
    $testeEncontrar4 = strpos($str, $palavra2);
    echo $testeEncontrar4 . "<br>";

?>