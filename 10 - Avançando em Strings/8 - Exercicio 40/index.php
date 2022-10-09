<?php
$contador_de_A = 0;
$frase = "O Rato roeu a roupa do rei de roma";
for($i = 0;$i <strlen($frase);$i++){
    if ($frase[$i] === "a") {
        $contador_de_A++;
    }
    
}
echo "O Número de A's é de: $contador_de_A" . "<br>";


?>