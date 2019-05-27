<?php

// Нарисуйте пирамиду, как показано ниже, только у вашей пирамиды должно быть 20 рядов, а не 5.
// `x`
// `xx`
// `xxx`
// `xxxx`
// `xxxxx`

$height = 20;

echo '<pre>';
for ($a = 1; $a <= $height; $a++) {
    for ($b = 0; $b < $a; $b++) {
        echo 'x';
    }
    echo "\n";
}
echo '</pre>';
