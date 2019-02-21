<?php

// In the following 6 digit number:
// 283910
// 91 is the greatest sequence of 2 consecutive digits.

// In the following 10 digit number:
// 1234567890
// 67890 is the greatest sequence of 5 consecutive digits.

// Complete the solution so that it returns the greatest sequence of five
// consecutive digits found within the number given. The number will be passed
// in as a string of only digits. It should return a five digit integer. 
// The number passed may be as large as 1000 digits.

function solution(string $s) {
	for ($i = 99999; $i > 0; $i--) { 
		if (strpos($s, (string) $i) !== false) {
	  		return substr($s, strpos($s, (string) $i), 5);
	  	}
	}
}

echo solution('1234567898765');

// preg_match_all("/(?=(\d{5}))/",$s,$matches);
// return max($matches[1]);
