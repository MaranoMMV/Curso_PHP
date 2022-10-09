<?php
    function teste(){
        $a = 0;
        $a++;
        echo "$a <br>";
    }
    teste();
    teste();
    teste();
    function testeStatick(){
        static $a = 0;
        $a++;
        echo "$a";
    }
    testeStatick();
    testeStatick();
    testeStatick();


?>