<?php

// Sum all the numbers of the array except the 
// highest and the lowest element (the value, not the index!).
// (The highest/lowest element is respectively only one element 
// at each edge, even if there are more than one with the same value!)

function sumArray($array) {
  return array_sum($array) - min($array) - max($array);
}
