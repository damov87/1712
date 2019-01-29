<?php

$arr = [
	'green' => 'зеленый',
	'red' => 'красный',
	'blue' => 'голубой',
];

$en = array();
foreach ($arr as $key => $value) {
    $en[] = $key;
}

$ru = array();
foreach ($arr as $key => $value) {
    $ru[] = $value;
}

// $en = array_keys($arr);
// $ru = array_values($arr);
var_dump($en);
echo "<br>";
var_dump($ru);
