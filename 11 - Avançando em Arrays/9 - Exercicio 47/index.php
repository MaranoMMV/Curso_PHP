<?php
$carro = ["Jaguar", 3.0, "azul", "18", "Teto solar", "Automático"];

print_r($carro);
echo "<br>";

list($nome_carro, $versao, $cor, $numeração, $teto_solar, $manual_ou_automatico) = $carro;

echo $nome_carro ."<br>";
echo $versao ."<br>";
echo $cor ."<br>";
echo $numeração . "<br>";
echo $teto_solar ."<br>";
echo $manual_ou_automatico ."<br>";





?>