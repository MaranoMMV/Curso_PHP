<?php
echo 5/2;
echo "<br>";

if (is_float(5/2)) {
    echo "é float";
}
echo "<br>";
echo 2.3;
echo "<br>";

if(is_string(2.3)){
    echo "é uma string";
}
echo "<br>";

$nome = "matheus";
$sobrenome = "battisti";
$nomecompleto = $nome . " " . $sobrenome;

echo $nomecompleto;
echo "<br>";
