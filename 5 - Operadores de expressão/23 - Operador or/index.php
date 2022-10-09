<?php
    if (5 > 2 || 3 < 4) {//os dois verdadeiro
       echo "os dois dão true 1 <br>";
    }
    if (5 > 2 || 3 < 1) {// o ultimo da falso
        echo "a operação da true<br>";
     }
     if (1 > 2 || 3 < 4) { // o primeiro da falso
        echo "a operação da true<br>";
     }
     if (1 > 2 || 5 < 4) { //os dois dão falso
        echo "a operação da true<br>";
     }
 
 

?>