<?php
include '15.html';
$a = $_POST ['a'];
$b = $_POST ['b'];
$operator = $_POST ['operator'];

if ($b == 0 && ($operator === '/' || $operator === '%')){
    echo "Division by 0 is impossible!";
}
else {
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
