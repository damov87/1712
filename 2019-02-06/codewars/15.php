<?php

// Task:
// Your task is to write a function which returns the 
// sum of following series upto nth term(parameter).

// Series: 1 + 1/4 + 1/7 + 1/10 + 1/13 + 1/16 +...
// Rules:
// You need to round the answer to 2 decimal places 
// and return it as String.
// If the given value is 0 then it should return 0.00
// You will only be given Natural Numbers as arguments.

// Examples:
// SeriesSum(1) => 1 = "1.00"
// SeriesSum(2) => 1 + 1/4 = "1.25"
// SeriesSum(5) => 1 + 1/4 + 1/7 + 1/10 + 1/13 = "1.57"

function series_sum($n) {
	if ($n === 0) {
		return 0.00;
	}
    $sum = 1; 
    $j = 1;
    for ($i = 2; $i <= $n; $i++) { 
    	$j += 3;
     	$sum += 1 / $j ; 
     	// $sum += 1/(1+3*$i);
     }   
    return round($sum, 2); 
}

echo series_sum(5);
