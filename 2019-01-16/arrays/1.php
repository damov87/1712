<?php

// Дан массив с элементами 'html', 'css', 'php', 'js', 'jq'.
// С помощью цикла foreach выведите эти слова в столбик.

$arr = [
   'html',
   'css',
   'php',
   'js',
   'jq',
];

foreach ($arr as $value) {
   echo $value . '<br>';
}
