<?php

function invert(array $a): array {
  $result = [];
  foreach ($a as $value)
  {
    $result[] = $value * -1;
  }
  return $result;
}
