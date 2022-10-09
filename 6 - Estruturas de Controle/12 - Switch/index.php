<?php
    //se caso o case encontrar uma solução que é igual a true ele executa tanto a de cima quanto as de baixo\\
    $x = 4;
    switch ($x) {
        case 0:
        echo "x é igual a 0";
        //mas se colocarmos o break ele para até a aquela parte
        break;
        case 1:
            echo "x é igual a 0";
        default;
            echo "x não é igual a nenhum dos números anteriores";
    }
?>