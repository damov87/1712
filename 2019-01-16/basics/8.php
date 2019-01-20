<?php

$age = 'hgg';
$test = is_int($age);
var_dump($test);
if ($age >=18 && $age <= 59) {
	echo 'Вам еще работать и работать';
} elseif ($age > 59) {
	echo 'Вам пора на пенсию';
} elseif ($age >= 0 && $age <= 17) {
	echo 'Вам еще рано работать';
} elseif ($age < 0 || $test === false) {
	echo 'Неизвестный возраст';	
}
