<?php

$a = 0;

settype($a, 'boolean');
var_dump($a); // значение будет false, так как в boolean false=0
