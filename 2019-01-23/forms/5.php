<?php

$str='а васька слушает да ест. а воз и ныне там. а вы друзья как ни садитесь, все в музыканты не годитесь. а король-то — голый. а ларчик просто открывался.а там хоть трава не расти.';

$str = explode('.', $str);
$str = array_filter($str);

// echo "<pre>";
// print_r($str);

function upFirstChar($str)
{
    $result = '';
    foreach ($str as $key => $val){
    $val = trim($val);
    $result .= mb_strtoupper(mb_substr($val, 0, 1)) . mb_substr($val, 1) . '. ';
    }
    return $result;
}

echo upFirstChar($str);