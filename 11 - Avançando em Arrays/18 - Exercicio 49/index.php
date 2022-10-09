<?php

    $raca = "vira lata";
    $Nome = "Turca";
    $idade = 3;
    $cor =  "preta";

    $turca  = compact("raca","Nome","idade","cor");

    print_r($turca);
    echo "<br>";

    foreach($turca as $caracteristica => $value){
        echo "$caracteristica: $value"  . "<br>";
    }


?>