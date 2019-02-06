<?php

// Complete the square sum method so that it 
// squares each number passed into it 
// and then sums the results together.

// For example: squareSum([1, 2, 2]) should 
// return 9 because 1^2 + 2^2 + 2^2 = 9.

function square_sum($numbers) : int {
    $result = 0;
    foreach ($numbers as $value) {
        $result += $value ** 2;
    }
    return $result;
}

echo square_sum([1, 2, 3]);
