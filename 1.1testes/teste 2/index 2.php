<?php
    //variaveis
    $idade = 17;
    $nome = "matheus marano";
    $habilitacao = true;
    //--//
    if ($idade>=18 && $habilitacao==true){
        echo "Você está habilitado e tem idade";
        }elseif ($idade>=18 && $habilitacao==true){
            echo "você tem idade e você tem habilitacao";
        }elseif ($idade<=17 && $habilitacao==true){
            echo "você não tem idade e você tem habilitacao";
        }elseif ($idade>=18 && $habilitacao==false){
            echo "você tem idade e não tem habilitacao";
    }else{
        echo "você não tem idade";
    }
    curl_init
?>