<?php
    $arrai = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20];
    $i = 0;
    for ($i = 0; $i < count($arrai); $i++) { 
        if ($arrai[$i] % 2 == 0) {
           echo $arrai[$i] . "<br>";
        }
    }
?>