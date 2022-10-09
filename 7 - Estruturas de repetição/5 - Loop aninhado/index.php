<?php
$i = 0;
while($i < 10){
    echo "loop externo $i" . "<br>";
    $i++;
        //o J é o segundo contado.
        $j = 1;
        while($j <= 5){
            echo "-------------Loop interno $j <br>";
            $j++;
        }
}

?>