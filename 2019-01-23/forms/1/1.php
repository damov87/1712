<?php

// Создать форму с двумя элементами textarea.
// При отправке формы скрипт должен выдавать только те слова, 
// которые есть и в первом и во втором поле ввода.
// Реализацию этой логики необходимо поместить в функцию getCommonWords($a, $b),
//  которая будет возвращать массив с общими словами.

include '1.html';
$a = $_POST ['a'];
$b = $_POST ['b'];

function getCommonWords($a, $b){
    $a=explode(' ',$a);
    $b=explode(' ',$b);
    $result = array();
    for ($i = 0; $i < count($a); $i++) {
        for ($j = 0; $j < count($b); $j++) {
            if($a[$i] === $b[$j]){
                $result[] = $a[$i];
                break;
            }
        }
    }
    if ($result === array()) {
        $result = 'Совпадений слов в строках №1 и №2 не найдено';
    } 
    return $result;
}

echo '<pre>';
print_r(getCommonWords($a,$b));
echo '</pre>';
