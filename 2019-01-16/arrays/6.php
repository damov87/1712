<?php

$arr = [
	'green' => 'зеленый',
	'red' => 'красный',
	'blue' => 'голубой',
];

$en = array_keys($arr);
$ru = array_values($arr);
var_dump($en);
echo "<br>";
var_dump($ru);
