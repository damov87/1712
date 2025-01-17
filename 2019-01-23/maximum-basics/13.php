<?php

// Your task is to create a function that does four basic mathematical operations.

// The function should take three arguments - operation(string/char), value1(number), value2(number).
// The function should return result of numbers after applying the chosen operation.

// Examples:
// basicOp('+', 4, 7)         // Output: 11
// basicOp('-', 15, 18)       // Output: -3
// basicOp('*', 5, 5)         // Output: 25
// basicOp('/', 49, 7)        // Output: 7

function basicOp($op, $val1, $val2)
{
      switch ($op) {
        case '+':
            $result = $val1 + $val2;
            break;
        case '-':
            $result = $val1 - $val2;
            break;
        case '*':
            $result = $val1 * $val2;
            break;
        case '/':
            $result = $val1 / $val2;
            break;
        }  
        return $result;
}
