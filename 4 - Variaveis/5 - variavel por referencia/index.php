<?php
    $x = 10;
    $y = & $x;
    echo $x;
    echo "<br>";
    echo $y;
    echo "<br>";

    $y = 15;
    echo "atribuicao";
    echo "<br>";
    echo $x;
    echo "<br>";
    echo $y;
    echo "<br>";

    $x = 35;
    echo "atribuicao";
    echo "<br>";
    echo $x;
    echo "<br>";
    echo $y;
    echo "<br>";




?>