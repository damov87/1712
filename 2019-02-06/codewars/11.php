<?php

// Take 2 strings s1 and s2 including only letters from ato z. 
// Return a new sorted string, the longest possible, 
// containing distinct letters, 
// each taken only once - coming from s1 or s2. 

// Examples: 
// a = "xyaabbbccccdefww" b = "xxxxyyyyabklmopq" 
// longest(a, b) -> "abcdefklmopqwxy"
// a = "abcdefghijklmnopqrstuvwxyz" 
// longest(a, a) -> "abcdefghijklmnopqrstuvwxyz" 

function longest($a, $b) {
    $c = $a . $b;
    $arr = str_split($c);
	$arr = array_unique($arr);
    sort($arr);
    $str = implode('', $arr);
    return $str;
}

echo '<pre>';
print_r(longest('fsdhi', 'cji'));

// return count_chars($a.$b, 3);
