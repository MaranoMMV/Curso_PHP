<?php
    $a = 36.77;
    $b = 0.23;
    $c = 100;
    $d = $a + $c;
    if(is_float($d)){
        echo "<br>é float A + B</br>";
    }
    if(is_float($c+$b)){
        echo "<br>é float C + B</br>";
    }
    if (is_float($c+$a)) {
        echo "<br>é float c + a</br>";
    }
    if (is_float(100)) {
        echo "<br>é float 100</br>";

    }

?>