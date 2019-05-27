<?php

// Given a string of digits, you should replace any digit below 5 with '0'
// and any digit 5 and above with '1'. Return the resulting string.

function fake_bin(string $s): string {
  $s = str_replace('1', '0', $s);
  $s = str_replace('2', '0', $s);
  $s = str_replace('3', '0', $s);
  $s = str_replace('4', '0', $s);
  $s = str_replace('5', '1', $s);
  $s = str_replace('6', '1', $s);
  $s = str_replace('7', '1', $s);
  $s = str_replace('8', '1', $s);
  $s = str_replace('9', '1', $s);
  return $s;
}

// return strtr($s, '0123456789', '0000011111');

// return preg_replace(array('/[0-4]/', '/[5-9]/'), array('0', '1'), $s);
