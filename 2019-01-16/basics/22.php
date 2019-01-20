<?php

$a = -20;

settype($a, 'boolean');
var_dump($a); // все значения integer, кроме нуля, будут true
