<?php

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