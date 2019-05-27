<?php

// Create a function named divisors/Divisors that takes an integer n > 1 
// and returns an array with all of the integer's divisors(except for 1 
// and the number itself), from smallest to largest. If the number is 
// prime return the string '(integer) is prime'.

// Example:
// divisors(12); // => [2, 3, 4, 6]
// divisors(25); // => [5]
// divisors(13); // => '13 is prime'

function divisors($integer) {
	$result = [];
    for ($i = 2; $i <= $integer / 2; $i++) {
  	    if ($integer % $i === 0) {
  	        $result[] = $i;
  	    }
    }
	if ($result === []) {
		$result = "{$integer} is prime";
	}
	return $result;
}

echo '<pre>';
print_r(divisors(588));
echo '</pre>';
