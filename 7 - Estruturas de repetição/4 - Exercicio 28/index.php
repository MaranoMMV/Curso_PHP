<?php
$a = 4;
while ($a < 30) {
    $a = $a + 2;
    echo $a . "<br>";
        if ($a === 24) {
            echo "terminando o loop" . "<br>";
            break;
        }
}
?>