<?php

function findNeedle($haystack) {
    $needle = array_search('needle', $haystack);
    return 'found the needle at position' . " $needle";
}
