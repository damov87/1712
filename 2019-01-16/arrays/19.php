<?php

$arr = [
	1 => 'Понедельник',
	'Вторник',
	'Среда',
	'Четверг',
	'Пятница',
	'Суббота',
	'Воскресенье'
];

$day = $arr[date("N")];

foreach ($arr as $key => $value) {
	if ($value == $day) {
		echo '<i>' . $day . '</i>' . '<br>';
	} else
		echo $value . '<br>';
}
