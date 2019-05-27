<?php

// Приведите число 20 к типу boolean. Объясните результат.

$a = 20;
$a = (bool) $a;

var_dump($a); // все значения integer, кроме нуля, будут true
echo '<br>';
echo 'все значения integer, кроме нуля, будут true';
