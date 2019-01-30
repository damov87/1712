<?php

function summation($n) {
	$sum = 0;
  	for ($i = $n; $i >= 0; $i--) { 
  		$sum += $i;
  	}
  	return $sum;
}

echo summation(5);
