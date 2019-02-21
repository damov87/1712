<?php

// You are given two arrays a1 and a2 of strings. 
// Each string is composed with letters from a to z. 
// Let x be any string in the first array and y be any string in the second array.

// Find max(abs(length(x) − length(y)))

// If a1 and/or a2 are empty return -1.

// #Example:

// a1 = ["hoqq", "bbllkw", "oox", "ejjuyyy", "plmiis", "xxxzgpsssa", 
// "xxwwkktt", "znnnnfqknaz", "qqquuhii", "dvvvwz"]
// a2 = ["cccooommaaqqoxii", "gggqaffhhh", "tttoowwwmmww"]
// mxdiflg(a1, a2) --> 13
// Bash note:
// input : 2 strings with substrings separated by ","
// output: number as a string

// Проверку на codewars не проходит, вообще не понятно что надо в этом задании и что за проверки идут!!! 
// Сделал как написано в формуле в задании - вернул плюсовую разницу двух самых длинных строк в массивах...
// solving the description for this kata is 1kyu kata itself
function mxdiflg($a1, $a2) {
    usort($a1, function ($a, $b) {
        return mb_strlen($b, 'UTF-8') <=> mb_strlen($a, 'UTF-8');
    });
    usort($a2, function ($a, $b) {
        return mb_strlen($b, 'UTF-8') <=> mb_strlen($a, 'UTF-8');
    });
    echo "<pre>";
    var_dump($a1);
    var_dump($a2);exit;
    return abs(strlen($a1[0]) - strlen($a2[0]));
}


$a1 = ["ccct", "tkkeeeyy", "ggiikffsszzoo", "nnngssddu", "rrllccqqqqwuuurdd", "kkbbddaakkk"];
$a2 = ["tttxxxxxxgiiyyy", "ooorcvvj", "yzzzhhhfffaaavvvpp", "jjvvvqqllgaaannn", "tttooo", "qmmzzbhhbb"];
// $a1 = ["hoqq", "bbllkw", "oox", "ejjuyyy", "plmiis", "xxxzgpsssa", "xxwwkktt", "znnnnfqknaz", "qqquuhii", "dvvvwz"];
// $a2 = ["cccooommaaqqoxii", "gggqaffhhh", "tttoowwwmmww"];
// $a1 = ["ejjjjmmtthh", "zxxuueeg", "aanlljrrrxx", "dqqqaaabbb", "oocccffuucccjjjkkkjyyyeehh"];
// $a2 = ["bbbaaayddqbbrrrv"];

echo mxdiflg($a1, $a2);