<?php

// Вам нужно создать массив и заполнить его случайными числами от 1 до 100 (функция rand).
// Далее, вычислить произведение тех элементов, которые больше ноля и у которых четные индексы.
// После вывести на экран элементы, которые больше ноля и у которых не четный индекс.

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
