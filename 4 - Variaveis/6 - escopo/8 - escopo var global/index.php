<?php
$teste = "asd";
echo "teste global 1<br>";
if(5>2){
    $teste ="dsa";
    echo "teste if 1<br>";
}
echo "teste global 2<br>";

function funcao(){
    $teste = "tiyhvsgiyad<br>";
    echo "$teste";
}
funcao();

function testandoglobal(){
    global $teste;
    echo "$teste global funcion<br>";

}

testandoglobal();




?>

