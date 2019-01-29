<?php

$arr = [
	'Понедельник',
	'Вторник',
	'Среда',
	'Четверг',
	'Пятница',
	'Суббота',
	'Воскресенье'
];

$day = $arr[date("N") - 1];

foreach ($arr as $key => $value) {
	if ($value === $day) {
		echo '<i>' . $day . '</i>' . '<br>';
	} else {
		echo $value . '<br>';
	}
}
