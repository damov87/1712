<?php

// Расширьте конструкцию if из п.5-7, выводя фразу: 
// "Неизвестный возраст" при условии, что значение переменной age
// является отрицательным числом, или вовсе числом не является.

$age = 'flksj';
if ($age >=18 && $age <= 59) {
	echo 'Вам еще работать и работать';
} elseif ($age > 59) {
	echo 'Вам пора на пенсию';
} elseif (is_numeric($age) === false || $age < 0) {
	echo 'Неизвестный возраст';	
} elseif ($age === 0 || $age <= 17) {
	echo 'Вам еще рано работать';
}
