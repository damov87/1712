<?php

$arr = [
	1 => 'Январь',
	'Февраль',
	'Март',
	'Апрель',
	'Май',
	'Июнь',
	'Июль',
	'Август',
	'Сентябрь',
	'Октябрь',
	'Ноябрь',
	'Декабрь'
];

// echo '<pre>';
// var_dump($arr);
// echo '</pre>';

$months = $arr[date("n")];

foreach ($arr as $value) {
	if ($value == $months) {
		echo '<b>' . $months . '</b>' . '<br>';
	} else
		echo $value . '<br>';
}
