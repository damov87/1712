<?php

// Написать функцию, которая в качестве аргумента принимает строку, 
// и форматирует ее таким образом, что предложения идут в обратном порядке.
// Пример:
// Входная строка: 'А Васька слушает да ест. А воз и ныне там. А вы друзья 
// как ни садитесь, все в музыканты не годитесь. А король-то — голый. 
// А ларчик просто открывался. А там хоть трава не расти.'
// Строка, возвращенная функцией :  'А там хоть трава не расти. А ларчик 
// просто открывался. А король-то — голый. А вы друзья как ни садитесь, 
// все в музыканты не годитесь. А воз и ныне там.А Васька слушает да ест.'

$str = 'А Васька слушает да ест. А воз и ныне там. А вы друзья как ни садитесь, все в музыканты не годитесь. А король-то — голый. А ларчик просто открывался. А там хоть трава не расти.';
$str = explode('.', $str);
$str = array_filter($str);
krsort($str);

foreach ($str as $key => $val){
    if ($key === 0) {
        echo ' ' . $val . '.';
    } else {
    echo $val . '.';
    }
}
