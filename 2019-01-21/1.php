<?php

function myPrintR($data, int $level = 1): void
{
   switch (true) {
       case is_null($data):
           echo '';
           break;
       case is_bool($data):
           echo $data ? '1' : '';
           break;
       case is_string($data):
       case is_int($data):
       case is_float($data):
           echo (string) $data;
           break;
       case is_array($data):
           echo 'Array' . PHP_EOL;
           addSpaces($level - 1);
           echo '(' . PHP_EOL;
           foreach ($data as $key => $value) {
               addSpaces($level);
               echo "[{$key}] => ";
               myPrintR($value, $level + 2);
               echo PHP_EOL;
           }
           addSpaces($level - 1);
           echo ')' . PHP_EOL;
           break;
   }
}

function addSpaces(int $level): void
{
   for ($i=0; $i < $level; $i++) {
       echo '    ';
   }
}

$arr = [
   'Dima',
   'Dasha',
    2 => [
       12,
       true,
       3 => 'Kiruha',
       'Sergey' => [
           12,
           true,
           3 => 'Tanya',
       ],
   ],
];
print_r($arr);
echo '<br>';
myPrintR($arr);

echo '<pre>';
print_r($arr);
echo '</pre>';


echo '<pre>';
myPrintR($arr);
echo '</pre>';
