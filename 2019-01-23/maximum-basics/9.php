<?php

function remove_char(string $s): string {
  return mb_substr($s, 1, -1); // Выводит часть строки, начиная со второго индекса и заканчивая предпоследним
}
