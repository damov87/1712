<?php

// You get an array of numbers, return the sum of all of the positives ones.
// Example [1,-4,7,12] => 1 + 7 + 12 = 20
// Note: if there is nothing to sum, the sum is default to 0.

function positiveSum($arr) {
	$result = 0;
	foreach ($arr as $key => $value) {
		if ($value > 0) {
			$result += $value;
		}
	}
	return $result;
}

$array = [1, -2, -3, 4, 5];

echo positiveSum($array);
