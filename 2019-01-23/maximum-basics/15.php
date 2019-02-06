<?php

// Write a program that finds the summation of every number from 1 to num. 
// The number will always be a positive integer greater than 0.

// For example:
// summation(8) -> 36
// 1 + 2 + 3 + 4 + 5 + 6 + 7 + 8

function summation($n) {
	$sum = 0;
  	for ($i = $n; $i >= 0; $i--) { 
  		$sum += $i;
  	}
  	return $sum;
}

function factorial(int $n) { // Функция вычисления факториала числа по примеру функции выше
	$factorial = 1;
  	for ($i = $n; $i >= 1; $i--) { 
  		$factorial *= $i;
  	}
  	if ($factorial === 1) {
  		$factorial = 'Число должно быть положительным!';
  	}
  	return $factorial;
}

echo factorial(6);
