<?php
    function teste($a = "teste"){
        echo "o valor de A é : $a <br>";
    }
    teste();
    teste("asd");

    function testando($b, $a = "x"){
        echo "o valor de A é: $a e de B é: $b" . "<br>";

    }
    testando("1");
    testando("1","2");
?>