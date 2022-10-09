<?php

    $x = 10;

    echo "$x global <br>";
    function teste(){
        $x = 5;
        $y = $x + $x;
        echo "$x local <br>";
        echo "$y<br>";
    }

teste();

function testando(){
    $x = 12;
    echo "$x local 2 <br>";
}

testando();
?>