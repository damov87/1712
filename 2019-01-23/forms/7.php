<?php

$string = 'яблоко черешня вишня вишня черешня груша яблоко черешня вишня яблоко вишня вишня черешня груша яблоко черешня черешня вишня яблоко вишня вишня черешня вишня черешня груша яблоко черешня черешня вишня яблоко вишня вишня черешня черешня груша яблоко черешня вишня';
$string = explode(' ', $string);
// echo '<pre>';
// print_r($string);
// echo '</pre>';
$string = array_count_values($string);
arsort($string);
foreach($string as $key => $value){
    echo $key . ' - ' . $value . '<br>';
}
