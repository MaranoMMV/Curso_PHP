<?php

    $arr = [
        'nome' => 'Matheus',
        'idade' => 29
    ];

    if(array_key_exists("nome", $arr)){
        echo "A chave existe! <br>";
    } else{
        echo "A chave não existe <br>";
    }

    if(array_key_exists("profissao", $arr)){
        echo "A chave existe! <br>";
    } else{
        echo "A chave não existe <br>";
    }

    if(isset($arr['nome'])){
            echo "A chave existe! <br>";
        } else{
            echo "A chave não existe <br>";
        }
    if(isset($arr['profissao'])){
            echo "A chave existe! <br>";
        } else{
            echo "A chave não existe <br>";
        }
    $a =  7;
    if(isset($a)){
            echo "A var existe! <br>";
        } else{
            echo "A var não existe <br>";
        }




?>