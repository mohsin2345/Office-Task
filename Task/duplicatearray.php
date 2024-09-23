<?php
$array1 = [4, 7, 8, 9, 68, 98];
$array2 = [4, 3, 1, 9, 68, 78];

$num = array_intersect($array1, $array2);

echo "Duplicate values:<br>";
print_r($num);
?>
