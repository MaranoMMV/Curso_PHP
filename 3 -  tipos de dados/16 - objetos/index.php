<?php
class pessoa{

    function falar(){
        echo "olá pessoal";
    }

}


$matheus = new pessoa ();

$matheus -> nome ="matheus";

echo $matheus->nome;

echo "<br>";

$matheus -> falar();
?>