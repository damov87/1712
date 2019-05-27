<?php

// Написать калькулятор. 
// Переменная $a = изменяемое число. 
// Переменная $b = изменяемое число. 
// Переменная $operator = ‘+’ или ‘-’ или ‘/’ или ‘*’ или '%' (остаток от деления).
// На экран выводить результат в зависимости от значений этих переменных.
// Не забудьте про деление на 0, если надо - выдавать ошибку что на 0 делить нельзя.

include '15.html';

$a = $_POST ['a'];
$b = $_POST ['b'];
$operator = $_POST ['operator'];

if ($b == 0 && ($operator === '/' || $operator === '%')){
    echo "Division by 0 is impossible!";
} elseif (is_numeric($b) === false || is_numeric($a) === false) {
    echo "Entering values must be numbers!";
} else {
    switch ($operator) {
        case '+':
            $result = $a + $b;
            break;
        case '-':
            $result = $a - $b;
            break;
        case '*':
            $result = $a * $b;
            break;
        case '/':
            $result = $a / $b;
            break;
        case '%':
            $result = $a % $b;
            break;
    }    
    echo 'Result: ' . $result;
}
