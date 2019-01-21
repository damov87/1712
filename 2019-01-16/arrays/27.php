<?php

$cols=10;
$rows=10;
$tr=1;

$colors = array('red','yellow','blue','gray','maroon','brown','green');

echo "<table border='1'>" ;

while($tr<=$rows){
  echo "<tr>" ; 
  $td=1;
  while ($td<=$cols){
    $randomKey = array_rand($colors);
    $randomValue = $colors[$randomKey];
	echo "<td style='background-color:$randomValue'>";
    echo rand();
    echo "</td>";
    $td++; 
  }
  echo "</tr>";
  $tr++ ;
}
echo "</table>" ; 
