<?php

// Написать функцию, которая переворачивает строку.
// Было "abcde", должна выдать "edcba".
// Ввод текста реализовать с помощью формы.

include '3.html';

$str = $_POST['str'];

function stringReverse($str)
{
    $r = '';
    for ($i = mb_strlen($str) - 1; $i >= 0; $i--) {
        $r .= mb_substr($str, $i, 1);
    }
    return $r;
}

echo stringReverse($str);
