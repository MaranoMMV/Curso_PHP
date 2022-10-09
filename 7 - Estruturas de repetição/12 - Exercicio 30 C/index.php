<?php
    $arrai = [];
    for ($a = 10; $a <= 20 ; $a++) { 
        array_push($arrai, $a);
    }
    print_r($arrai);


    //Segunda parte
    $i = 0;
    for ($i = 0; $i < count($arrai); $i++) { 
        if ($arrai[$i] % 2 == 1) {
           echo $arrai[$i] . "<br>";
        }
    }
?>