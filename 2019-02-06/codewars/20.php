<?php

// You are given an odd-length array of integers, in which
// all of them are the same, except for one single number.

// Complete the method which accepts such an array, 
// and returns that single different number.

// The input array will always be valid! (odd-length >= 3)

// Examples
// [1, 1, 2] ==> 2
// [17, 17, 3, 17, 17, 17, 17] ==> 3

function stray($arr)
{
	$count = array_count_values($arr);
	foreach ($count as $key => $value) {
		if ($value === 1) {
			return $key;
		}
	}
}

echo stray([17, 17, 3, 17, 17, 17, 17]);

// return array_search(1, array_count_values($arr));
