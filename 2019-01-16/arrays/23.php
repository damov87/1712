<?php

// Вам нужно разработать программу, которая считала бы сумму цифр числа введенного пользователем.
// Например: есть число 123, то программа должна вычислить сумму цифр 1, 2, 3, т. е. 6.
// По желанию можете сделать проверку на корректность введения данных пользователем.

$number = "12346";

$sum = 0;

for($i = 0; $i < strlen($number); $i++) {
    $sum += $number[$i];
}

echo $sum;
