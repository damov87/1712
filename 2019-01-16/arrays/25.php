<?php

$arr = [
   rand(1, 200),
   rand(1, 200),
   rand(1, 200),
   rand(1, 200),
   rand(1, 200),
   rand(1, 200),
];

$max = max($arr);
$min = min($arr);

$keyMax = array_search($max, $arr);
$keyMin = array_search($min, $arr);

echo "<pre>";
print_r($arr);
echo "</pre>";

list($arr[$keyMin], $arr[$keyMax]) = array($arr[$keyMax], $arr[$keyMin]);

echo "<pre>";
print_r($arr);
echo "</pre>";
