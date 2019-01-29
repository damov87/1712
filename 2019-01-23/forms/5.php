<?php

if(!function_exists('mb_ucfirst'))
{
    function mb_ucfirst($string)
    {
        return mb_strtoupper(mb_substr($string, 0, 1, 'UTF-8'), 'UTF-8') . mb_substr($string, 1, mb_strlen($string, 'UTF-8'), 'UTF-8');
    }
}

function sentenceFirstCharUpper($str){
    $new_string = '';
    $sentences = preg_split('/([.?!]+)/', $str, -1, PREG_SPLIT_DELIM_CAPTURE);

    foreach ($sentences as $key => $sentence) { 
    $new_string .= ($key & 1) == 0? 
        mb_ucfirst(strtolower(trim($sentence))) : 
        $sentence . ' '; 
    } 
    return $new_string;
}

$str='а васька слушает да ест. а воз и ныне там. а вы друзья как ни садитесь, все в музыканты не годитесь. а король-то — голый. а ларчик просто открывался.а там хоть трава не расти.';
echo sentenceFirstCharUpper($str);