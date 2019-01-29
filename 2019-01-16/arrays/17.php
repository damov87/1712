<?php

$arr = [
	'Январь',
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

$months = $arr[date("n") - 1];

foreach ($arr as $value) {
	if ($value === $months) {
		echo '<b>' . $months . '</b>' . '<br>';
	} else {
		echo $value . '<br>';
	}
}
