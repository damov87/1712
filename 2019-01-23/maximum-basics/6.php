<?php

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
