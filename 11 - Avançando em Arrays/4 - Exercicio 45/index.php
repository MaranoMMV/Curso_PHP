<?php
$arr = range(10,45);

for($i = 0;  $i <count($arr);$i++){
    $soma  = $arr[$i]  + 6;
    echo "$soma <br>";
    if($soma > 30){
        echo "o número é muito alto";
    }else "$soma <br>";

}

?>
