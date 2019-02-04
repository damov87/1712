<?php

// Создать генератор случайных таблиц.
// Есть переменные: $row - кол-во строк в таблице, $cols - кол-во столбцов в таблице.
// Есть список цветов, в массиве: $colors = array('red','yellow','blue','gray','maroon','brown','green').
// Необходимо создать скрипт, который по заданным условиям выведет таблицу размера $rows на $cols,
// в которой все ячейки будут иметь цвета, выбранные случайным образом из массива $colors.
// В каждой ячейке должно находиться случайное число.

$cols = 10;
$rows = 10;
$tr = 1;

$colors = array(
  'red',
  'yellow',
  'blue',
  'gray',
  'maroon',
  'brown',
  'green'
);

echo '<table border="1">';

while ($tr <= $rows) {
  echo '<tr>'; 
  $td = 1;
  while ($td <= $cols) {
    $randomKey = array_rand($colors);
    $randomValue = $colors[$randomKey];
	echo "<td style='background-color:$randomValue'>";
    echo rand();
    echo '</td>';
    $td++; 
  }
  echo '</tr>';
  $tr++;
}
echo '</table>'; 
