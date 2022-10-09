<?php
    $a = true;

    if(is_bool($a)) {
        echo "é uma booleana 1<br>";
    }
    if(is_bool(0)) {
        echo "é uma booleana 2<br>";
    }
    if(is_bool(false)) {
        echo "é uma booleana 3<br>";
    }

    if (0 == false) {
        echo "0 é considerado falso";
        # code...
    }




?>
