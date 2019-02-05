<?php

// Get the number n (n>0) to return 
// the reversed sequence from n to 1.
// Example : n=5 >> [5,4,3,2,1]

function reverseSeq ($n) {
  for ($i = $n; $i >= 1; $i--) { 
		$arr[] = $i;
	}
	return $arr;
}

// return range($n, 1);
