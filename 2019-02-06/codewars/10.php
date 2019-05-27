<?php

// An isogram is a word that has no repeating letters, consecutive or non-consecutive. 
// Implement a function that determines whether a string that contains only letters is an isogram. 
// Assume the empty string is an isogram. Ignore letter case.

// isIsogram "Dermatoglyphics" == true
// isIsogram "moose" == false
// isIsogram "aba" == false

function isIsogram($string) {
  $array = str_split(strtolower($string));
  if (count($array) !== count(array_unique($array))) {
    return false;
  } elseif (count($array) === count(array_unique($array))) {
  	return true;
  } 
}

var_dump(isIsogram('asdAfghj'));
