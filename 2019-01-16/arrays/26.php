<?php

$arr = [
   rand(1, 100),
   rand(1, 100),
   rand(1, 100),
   rand(1, 100),
   rand(1, 100),
   rand(1, 100),
];

foreach ($arr as $key => $value) {
    if (($key % 2) && $value > 0) {
      $odd[] = $value;
    } elseif (!($key % 2) && $value > 0) {
      $even[] = $value;
    }                       
}

$resultEven = 1;
foreach ($even as $value) {
    $resultEven *= $value;
}
echo $resultEven;
  
echo '<br><br>';

foreach ($odd as $key => $value) {
	echo $value . '<br>';
}
