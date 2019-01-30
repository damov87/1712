<?php

$height = 9;

echo '<pre>';
for ($a = 1; $a <= $height; $a++) {
    for ($b = 0; $b < $a; $b++) {
        echo $a;
    }
    echo "\n";
}
echo '</pre>';
