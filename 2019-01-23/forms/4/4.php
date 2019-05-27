<?php

// Написать функцию, которая считает количество уникальных слов в тексте.
// Слова разделяются пробелами.
// Текст должен вводиться с формы.

include '4.html';

$str = $_POST['str'];

function uniqueWords($str){
    // $arr = explode(' ', mb_strtolower($str)); // Исключение также одинаковых слов, но написанных с разными регистрами
    $arr = explode(' ', $str);
    $arr = array_unique($arr);
    echo 'Количество уникальных слов в строке: ' . count($arr);
}

echo uniqueWords($str);
