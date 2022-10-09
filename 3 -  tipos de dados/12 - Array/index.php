<?php
    //posso utilizar no P.I., IMPORTANTE!!!
    $a = [1,2,3];
    //echo "$a"; se tentarmos usar o echo como print de uma string de um array vai dar um erro.
    print_r($a);//se utilizarmos dessa maneira conseguiremos printar na tela :)
    
    //para utilizarmos apenas um item do array para printar no echo, podemos utilizar da seguinte forma:
        echo $a[0];
    
    $arr = ["matheus",1005,true];
    echo "<br>";
    print_r($arr);
    echo "<br>";
    print_r($arr[1]);
?>