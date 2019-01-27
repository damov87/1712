<?php
include '15.html';
$a = $_POST ['a'];
$b = $_POST ['b'];
$operator = $_POST ['operator'];

if ($b == 0 && ($operator == '/' || $operator == '%')){
    echo "Division by 0 is impossible!";
}
else {
    if ($operator == '+') {
        $result = $a + $b; 
    }
    if ($operator == '-') {
        $result = $a - $b;
    }
    if ($operator == '/')  {
        $result = $a / $b;
    }
    if ($operator == '*') {
        $result = $a * $b;
    }
    if ($operator == '%') {
        $result = $a % $b;
    }
    echo 'Result: ' . $result;
}
?>