<?php
$arr = [
    'Matheus' => 29,
    'Pedro' => 18,
    'joaquina' => 14,
    'martia' => 12
];

asort($arr);
print_r($arr);
echo "<br>";

$arr2 = [
    'Matheus' => 29,
    'Pedro' => 18,
    'joaquina' => 14,
    'martia' => 12
];

arsort($arr2);
print_r($arr2);
echo "<br>";

?>