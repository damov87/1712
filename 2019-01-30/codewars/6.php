<?php

// Given a set of numbers, return the additive inverse of each. 
// Each positive becomes negatives, and the negatives become positives.

function invert(array $a): array {
  $result = [];
  foreach ($a as $value)
  {
    $result[] = $value * -1;
  }
  return $result;
}
