<?php

// You are going to be given a word. Your job is 
// to return the middle character of the word. 
// If the word's length is odd, return the middle character. 
// If the word's length is even, return the middle 2 characters.
// Kata.getMiddle("test") should return "es"
// Kata.getMiddle("testing") should return "t"

function getMiddle($text) {
  if (strlen($text) % 2) {
    return substr($text, strlen($text) / 2, 1);
  } else {
    return substr($text, strlen($text) / 2 - 1, 2);
  }
}

// echo getMiddle('Test');
