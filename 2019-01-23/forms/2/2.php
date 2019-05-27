<?php

// Создать форму с элементом textarea.
// При отправке формы скрипт должен выдавать ТОП3 длинных слов в тексте.
// Реализовать с помощью функции.

include '2.html';

$a = $_POST['a'];

function topThreeLengthWordsInString($a)
{
    $a = explode(' ', $a);
        for ($i = 0; $i < count($a) - 1; $i++) {
            if (mb_strlen($a[$i]) < mb_strlen($a[$i + 1])){
                $c = $a[$i];
                $a[$i] = $a[$i + 1];
                $a[$i + 1]=$c;
            }
        }
    return (array_slice($a, 0, 3));
}

echo '<pre>';
print_r(topThreeLengthWordsInString($a));
echo '</pre>';
