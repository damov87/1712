<?php

// Complete the function/method so that it returns 
// the url with anything after the anchor (#) removed.

// Examples:
// // returns 'www.codewars.com'
// removeUrlAnchor('www.codewars.com#about')
// // returns 'www.codewars.com?page=1' 
// removeUrlAnchor('www.codewars.com?page=1')

function replaceAll($string) {
	if (strpos($string, '#') !== false) {
		$anchor = strpos($string, '#');
		$result = substr($string, 0, $anchor);
		return $result;
	} else {
		return $string;
	}
}

echo replaceAll('www.codewars.com?page=1');

// return preg_replace('/#.*$/','',$string);
