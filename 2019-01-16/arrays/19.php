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

$day = $arr[1];
foreach ($arr as $key => $value) {
	if ($key === 1) {
		echo '<i>' . $day . '</i>' . '<br>';
	} else
		echo $value . '<br>';
}
