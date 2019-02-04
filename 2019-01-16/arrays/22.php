<?php

// Нарисуйте пирамиду, как показано ниже, воспользовавшись циклом for или while.
// `xx`
// `xxxx`
// `xxxxxx`
// `xxxxxxxx`
// `xxxxxxxxxx`

$height = 5;

echo '<pre>';
for ($a = 1; $a <= $height; $a++) {
    for ($b = 0; $b < $a; $b++) {
        echo 'xx';
    }
    echo "\n";
}
echo '</pre>';
