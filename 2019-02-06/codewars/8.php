<?php

// Simple, given a string of words, return the length of the shortest word(s).
// String will never be empty and you do not need to account for different data types.

function findShort($str){
	$arr = explode(' ', $str);
	usort($arr, function ($a, $b) {
	    return mb_strlen($a, 'UTF-8') <=> mb_strlen($b, 'UTF-8');
	});
	return mb_strlen($arr[0]);
}
