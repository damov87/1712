<?php

$number = "1234";

$sum = 0;

for($i = 0; $i < strlen($number); $i++) {
    $sum += $number[$i];
}

echo $sum;
