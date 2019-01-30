<?php

$height = 20;

echo '<pre>';
for ($a = 1; $a <= $height; $a++) {
    for ($b = 0; $b < $a; $b++) {
        echo 'x';
    }
    echo "\n";
}
echo '</pre>';
