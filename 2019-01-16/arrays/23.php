<?php

$number = "12346";

$sum = 0;

for($i = 0; $i < strlen($number); $i++) {
    $sum += $number[$i];
}

echo $sum;
