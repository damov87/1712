<?php

// Return the number (count) of vowels in the given string.
// We will consider a, e, i, o, and u as vowels for this Kata.
// The input string will only consist of lower case letters and/or spaces.

function getCount($str) {
  $vowelsCount = 0;
  
  $vowelsCount += substr_count($str, 'a');
  $vowelsCount += substr_count($str, 'e');
  $vowelsCount += substr_count($str, 'i');
  $vowelsCount += substr_count($str, 'o');
  $vowelsCount += substr_count($str, 'u');
  
  return $vowelsCount;
// return preg_match_all("/[aeiou]/", $str);
}
