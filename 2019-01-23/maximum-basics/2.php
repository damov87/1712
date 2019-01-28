<?php

function evenOrOdd(int $n): string {
  if ($n % 2 === 0) {
    $a = 'Even';
  } else $a = 'Odd';
  return $a;
}

echo evenOrOdd(9);