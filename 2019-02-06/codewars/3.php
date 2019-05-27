<?php

// This time no story, no theory. The examples below 
// show you how to write function accum:
// Examples:
// accum("abcd") -> "A-Bb-Ccc-Dddd"
// accum("RqaEzty") -> "R-Qq-Aaa-Eeee-Zzzzz-Tttttt-Yyyyyyy"
// accum("cwAt") -> "C-Ww-Aaa-Tttt"
// The parameter of accum is a string which includes 
// only letters from a..z and A..Z.

function accum($s) {

	$result = '';

	for ($i = 0; $i <= strlen($s); $i++) {
			$result .= '-';
	    for ($j = 0; $j < $i; $j++) {
	        $result .= strtolower($s[$i - 1]);
	    }
	}

	$result = explode('-', $result);
	$accum = '';

	foreach ($result as $value) {
		$accum .= ucfirst($value) . '-';
	}

	$accum = trim($accum, '-');

	return $accum;
}

$str = 'kdfHcsdkH';
echo $str;
echo '<br>';
echo accum($str);

// function accum($s) {
//     $parts = [];
    
//     foreach (str_split($s) as $index => $part) {
//       $parts[] = strtoupper($part) . str_repeat(strtolower($part), $index);
//     }
    
//     return implode('-', $parts);
// }
