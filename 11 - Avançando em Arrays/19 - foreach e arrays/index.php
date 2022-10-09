<?php

    $pessoa = [
        'nome' => "Matheus",
        'idade'  => 21,
        'prrofissao' => 'programador'
    ];

    $alexa = [
        'nome' => 'Alexa',
        'idade' => 3,
        'profissao' => 'Melhor Auxiliadora'
    ];

    foreach ($pessoa as $carac => $value) {

        echo "$carac => $value" . "<br>";

    }
    foreach ($alexa as $carac => $value) {

        echo "$carac => $value" . "<br>";

    }


?>