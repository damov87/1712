<?php

// Выведите результат сравнения $a и $b из п.17 с помощью var_dump.

$a = '78';
$b = 78;

if ($a == $b) {
	$message = 'равны';
} else {
	$message = 'не равны';
}

var_dump($message);
