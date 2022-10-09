<?php

    $arr = [1, 2, 3, 4, 5, 6, 7];
    function soma($a,$b){
        return $a + $b;;
    }

    $resultado = array_reduce($arr,"soma");

    echo $resultado . "<br>";

?>