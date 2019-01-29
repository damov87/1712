<?php

$arr = [
   rand(1, 100),
   rand(1, 100),
   rand(1, 100),
   rand(1, 100),
   rand(1, 100),
   rand(1, 100),
];

foreach($arr as $key => $value){
    if(($key % 2) && $value > 0)
        $odd[] = $value; 
            elseif(!($key % 2) && $value > 0)
                $even[] = $value;        
};

// echo "<pre>";
// print_r($arr);
// echo "</pre>";

echo "<pre>";
//print_r($even);
print_r(array_product($even));
echo "</pre>";

foreach ($odd as $key => $value) {
	echo $value . '<br>';
}

// echo "<pre>";
// print_r($odd);
// echo "</pre>";
