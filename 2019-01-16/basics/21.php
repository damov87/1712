<?php

// Приведите число 0 к типу boolean. Объясните результат.

$a = 0;
$a = (bool) $a;

var_dump($a); // значение будет false, так как в boolean 0 = false
echo '<br>';
echo 'значение будет false, так как в boolean 0 = false';
