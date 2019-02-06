<?php

// Create a function (or write a script in Shell) 
// that takes an integer as an argument and returns 
// "Even" for even numbers or "Odd" for odd numbers.

function evenOrOdd(int $n): string {
  if ($n % 2 === 0) {
    $a = 'Even';
  } else $a = 'Odd';
  return $a;
}

echo evenOrOdd(9);
