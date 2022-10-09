<?php
//Criando arquivos que não existe//
    include_once "teste2.php";
    //se colocarmos o include duas vezes, ele reconhece e executa apenas uma.
    include_once "teste2.php";
    //já com apenas o include ele executa os dois
    include "teste2.php";
    include "teste2.php";

//arquivo que não existe
    require_once "teste3.php";

?>
<h1> Testando execução </h1>
