<?php
function velocidade_maxima($vel){
    echo "o carro atinge a velocidade maxima de $vel km/h" . "<br>";

}
    $velocidade = 16;
    velocidade_maxima($velocidade, "teste"."teste2");
function descrever_animal($nome, $raca){
    
    echo "o $nome é da raça $raca" . "<br>";
}
descrever_animal("bob", "vira lata");
descrever_animal("rodolfo", "Golden Shower");
$nome = "Isabel";
$raca = "pintcher";
descrever_animal("$nome", "$raca");

?>