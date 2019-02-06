<?php

// It's pretty straightforward. Your goal is to create a function that 
// removes the first and last characters of a string. 
// You're given one parameter, the original string. 
// You don't have to worry with strings with less than two characters.

function remove_char(string $s): string {
  return mb_substr($s, 1, -1); // Выводит часть строки, начиная со второго индекса и заканчивая предпоследним
}
