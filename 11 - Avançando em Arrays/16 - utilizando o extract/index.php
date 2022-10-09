<?php

    $arr  = [
        'cor' => 'vermelho',
        'forma' => 'retangular',
        'material' =>'aço'
    ];

    extract($arr);

    echo "$cor" . "<br>";
    echo "$forma" . "<br>";
    echo "$material" . "<br>";

    $nome =  "Matheus";
    $pessoa  = [
        'nome' => 'joão',
        'idade' => '47'
    ];
    
    echo $nome . "<br>";
    echo $idade . "<br>";



?>