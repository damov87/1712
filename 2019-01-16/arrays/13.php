<?php

// Вывести таблицу умножения (от 1 до 10)

$cols = 10;
$rows = 10;
$tr = 1;

echo "<table border='1'>" ;

while ($tr <= $rows) {
  echo "<tr>" ; 
  $td = 1;
  while ($td <= $cols) {
    echo "<td>" . $tr * $td . "</td>";
    $td++; 
  }
  echo "</tr>";
  $tr++;
}
echo "</table>" ; 
