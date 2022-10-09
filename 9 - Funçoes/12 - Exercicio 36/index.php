<?php
    $arr = [];
    function arraiMaiorQueSete($array){

        $ArrayRetorno = [];

        for ($j = 0; $j < count($array); $j++){

            if($arr[$j]>7){

            array_push($ArrayRetorno,$array[$j]);
        }

    }

    return $ArrayRetorno;

}

$novoArray = arraiMaiorQueSete($arr);
print_r($novoArray)


?>