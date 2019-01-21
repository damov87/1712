<?php

// $months = array(
// 	1 => 'Январь',
// 	'Февраль',
// 	'Март',
// 	'Апрель',
// 	'Май',
// 	'Июнь',
// 	'Июль',
// 	'Август',
// 	'Сентябрь',
// 	'Октябрь',
// 	'Ноябрь',
// 	'Декабрь'
// );

//echo '<b>' . $months[date( 'n' )] . '</b>';

// function sumOfSeries($int1, $int2)
// {
// $result = 0;
//     for ($a = $int1; $a <= $int2; $a++) {
//         $result = $result + $a;
//     }
//     return $result;
// 
// echo sumOfSeries(1,8);

// function doesContain($str, $char)
// {
//     $index = 0;
//     while ($index < strlen($str)) {
//         if ($str[$index] === $char) {
//             return true;
//         }

//         $index++;
//     }

//     return false;
// }

// function doesContain($str, $char)
// {
//     $pos = strpos($str, $char);
//     $rest = substr($str, $pos, 1);

//     if ($rest === $char) {
//     return true;
// } else {
//     return false;
// }
// }
// echo doesContain($str, 'I');

// $str = 'diablo';
// $char = 'b';
// $pos = strpos($str, $char);
// $rest = substr($str, $pos, 1);
// echo $rest;

// function filterString($str, $char)
// {
//     $index = 0;
//     $length = strlen($str);
//     $result = '';
//     while ($index < $length) {
//         $currentChar = $str[$index];
//         if ($currentChar !== $char) {
//             $result = "{$result}{$currentChar}";
//         }
//         $index++;
//     }

//     return $result;
// }

// $str = 'If I look back I am lost';
// $char = 'I';
// echo str_replace($char, '', $str);

// function getEvenNumbersUpTo($num)
// {
//     $counter = 1;
//     $result = '';

//     while ($counter <= $num) {
//         if ($counter % 2 === 0) {
//             $result = $result . $counter . ',';
//         }

//         $counter += 1;
//     }

//     return $result;
// }
// print_r(getEvenNumbersUpTo(5));

// function shouter($str)
// {
//     $length = strlen($str);
//     $result = '';

//     if ($length > 5) {
//         $counter = 0;
//         while ($counter !== 100) {
//             $result = $result . $str;
//             $counter += 1;
//         }
//     }
//     elseif ($length > 0 && $length < 5) {
//         $result = $str;
//     } elseif ($length === 5) {
//         $counter = 0;
//         while ($counter !== 10) {
//             $result = $result . $str;
//             $counter += 1;
//         }
//     }
//     return $result;
// }
// echo shouter('Hell');

// function countChars($str, $char)
// {
//     $index = strlen($str) - 1;
//     $result = 0;
//     while ($index >= 0) {
//         if ($str[$index] === $char) {
//             $result += 1;
//         }
//         $index -= 1;
//     }

//     return $result;
// }

// function printNumbers($i)
// {
//     // BEGIN
//     while ($i > 0) {
//         print_r("{$i}\n");
//         $i = $i - 1;
//     }
//     print_r('finished!');
//     // END
// }
// printNumbers(3);

// function generateAmount($quantity, $price)
// {
//     $user = $quantity ?: $price * 3;
//     return $user;
// }

// function isFalsy($a) {
//     return $a == false;
// }

// function convertString($sentence)
// {
//     $firstChar = ucfirst($sentence);

//     return ($firstChar === $sentence) ? ($sentence) : strrev($sentence);
// }
// echo convertString('hello');

// function whoIsThisHouseToStarks($lastname)
// {
//     if ($lastname === 'Karstark' || $lastname === 'Tully') {
//         $family = 'friend';
//     } elseif ($lastname === 'Lannister' || $lastname === 'Frey') {
//         $family = 'enemy';
//     } else {
//         $family = 'neutral';
//     }

//     return $family;
// }
// echo whoIsThisHouseToStarks('Frey');

// function normalizeUrl($url)
// {
//     $https = 'https://';
//     $pos = strpos($url, $https);

//     if ($pos === false) {
//     $normUrl = $https . $url;
// } else {
//     $normUrl = $url;
// }
//     return $normUrl;
// }
// echo normalizeUrl('google.com');

// function getSentenceTone($sentence)
// {
//     $up = strtoupper($sentence);
//     if ($up === $sentence) {
//         return 'scream';
//     }

//     return 'normal';
// }
// echo getSentenceTone('small');

// $a = true ? 12 : 230;
// 	 echo $a;

// 	 echo '<br>';

// 	 $b = (1 > 2) ? ' Foo' : '';
// 	 echo $b;

// 	 $c = ($a && $b) ? ' FooBar' : 0;
// 	 echo $c;

// function isLannisterSoldier($color, $shield)
// {
//     return ($color === 'red' && $shield === null) || ($shield === 'lion');
// }

// function isNotLannisterSoldier($color, $shield)
// {
//     return !isLannisterSoldier($color, $shield);
// }



// for ($i = 200; $i <= 400; $i++) { 
// 	echo  "Check for {$i} ... ";
//     $flag = true;
//     for ($j = 2; $j <= $i/2; $j++)
//         if( $i % $j == 0)
//             $flag = false;
//     if($flag)
// 		break;
// }

// for ($i = 10; $i <= 20; $i++) {
// 	echo  "Check for {$i} ... ";
// 	if ($i % 3 == 0) {
// 		echo 'gotcha! <br>';
// 		continue;
// 	}
// 	echo 'nope <br>';
// }

// for ($i = 10; $i <= 20; $i++) {
// 	echo  "Check for {$i} ... ";
// 	if ($i % 3 == 0) {
// 		echo 'gotcha! ';
// 		break;
// 	}
// 	echo 'nope ';
// }

// $arr = array(
//     'first'  => 1,
//     'second' => 2,
//     'third'  => 3,
//     'fourth' => 4,
//     'fifth'  => 5,
//     'fsd'  => 6,
//     'vg'  => 7,
//     'tr'  => 8,
//     'fa'  => 9,
//     'vtg'  => 12
// );

// foreach ($arr as $value) {

//    if ($value % 3) {
//        continue;
//    }
//    echo $value . '<br>';
// }

// if ($x > $y) {
// 	$message = 'x is max value';
// } else {
// 	$message = 'y is max value';
// }

// $arr = array(
//     'first'  => 1,
//     'second' => 2,
//     'third'  => 3,
//     'fourth' => 4,
//     'fifth'  => 5
// );

// foreach ($arr as $key => $val) {
//     echo $key . ' element is = ' . $val . '<br>';
// }

// $i = 1;
// while ($i <= 100) {
// 	$flag = true;
// 	for ($j = 2; $j <= $i/2; $j++)
// 		if( $i % $j == 0)
// 			$flag = false;
// 	if($flag)
// 		$simple[] = $i;
// 	var_dump($simple);
//     $i++;
// }

// for ($i = 1; $i <= 100; $i++)
// { 
//     $flag = true;
//     for ($j = 2; $j <= $i/2; $j++)
//         if( $i % $j == 0)
//             $flag = false;
//     if($flag)
//         $simple[] = $i;
// }
// var_dump($simple);

// for ($i = 1; $i <= 10; $i++) {
// 	echo "{$i} <br>";
// }

// $x = 5;
// $y = 30;
// switch ($x) {    
//    case $x > $y:
//      echo 'x is max value';
//      break;
//    case $x < $y:
//      echo 'y is max value';
//      break;
//    default: echo 'Sorry man';
// }

// $x = 125;
// $y = 500;

// $c = ($x > $y) ? 'x is max value' : 'y is max value';

// echo $c;


// $x = 125;
// $y = 5;

// if ($x > $y) {
// 	$message = 'x is max value';
// } else {
// 	$message = 'y is max value';
// }

// echo $message;


// $x = 12;
// $y = 0;

// if ($y != 0) {
	// $message = "We can divide x by y";
	// $result = $x / $y;
// } else {
	// $message = "We cannot divide x by y";
// }

// echo $message;