<?php

function square_sum($numbers) : int {
    $result = 0;
    foreach ($numbers as $value) {
        $result += $value ** 2;
    }
    return $result;
}

echo square_sum([1, 2, 3]);
