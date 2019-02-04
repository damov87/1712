<?php

function countPositivesSumNegatives($input) {
	$arr = [];
	$count = 0;
	$sum = 0;
	if ($input === null || $input === []) {
		return $arr;
	}
	foreach ($input as $key => $value) {
		if ($value > 0) {
			$count++;
		} elseif ($value < 0) {
			$sum += $value;
		}
	}
	$arr[] = $count;
	$arr[] = $sum;
    return $arr;
}

$array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, -11, -12, -13, -14, -15];

var_dump(countPositivesSumNegatives($array));

// if (empty($input)) {
//   return [];
// }
