<?php

// Oh no, Timmy's created an infinite loop! Help Timmy 
// find and fix the bug in his unfinished For Loop!

function createArray($number){
  $newArray = array();
  
  for ($count = 1; $count <= $number; $count++) { // добавил $count++
    $newArray[] = $count;
  }
  
  return $newArray;
}
