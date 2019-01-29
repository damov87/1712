<?php

$arr = [
	'green' => 'зеленый',
	'red' => 'красный',
	'blue' => 'голубой',
];

$en = [];
$ru = [];
foreach ($arr as $key => $value) {
    $en[] = $key;
    $ru[] = $value;
}

echo '<pre>';
print_r($arr);
print_r($en);
print_r($ru);
echo '</pre>';
