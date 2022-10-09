<?php
    function alteraDados($nome,$idade){
        $nome = "Sr." . "$nome";
        $idade = "$idade anos";
        
        return[$nome,$idade];
    }
    $dados = alteraDados("Matheus",19);
    print_r($dados);

    echo "Olá $dados[0], Você tem $dados[1]" . "<br>";