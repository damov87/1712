<?php

function myVarDump($data, int $level = 0): void
{
   switch (true) {
       case is_null($data):
           echo 'NULL';
           break;
       case is_bool($data):
           if ($data === true) {
           echo 'bool(true)';
           } else
           echo 'bool(false)';
           break;
       case is_string($data):
           echo 'string(';
           print_r(strlen($data));
           echo ') "' . $data . '"';
           break;
       case is_int($data):
           echo 'int(' . $data . ')';
           break;
       case is_float($data):
           echo 'float(' . $data . ')';
           break;
       case is_array($data):
           echo 'array(';
           print_r(count($data));
           echo ')  {' . PHP_EOL;
           foreach ($data as $key => $value) {
               addSpaces($level + 1);
               echo "[{$key}]=> " . PHP_EOL;
               addSpaces($level + 1);
               myVarDump($value, $level + 1);
               echo PHP_EOL;
           }
           addSpaces($level);
           echo '}';
           break;
   }
}

function addSpaces(int $level): void
{
   for ($i=0; $i < $level; $i++) {
       echo '  ';
   }
}

$a = [
   'Dasha',
   'Dima',
   'Igor',
   15 => [
       12,
       true,
       25 => 'Kiruha',
       14 => [
           12,
           true,
           25 => 'Tanya',
       ],
   ],
];

var_dump($a);
echo '<br>';
myVarDump($a);

echo '<pre>';
var_dump($a);
echo '</pre>';

echo '<pre>';
myVarDump($a);
echo '</pre>';