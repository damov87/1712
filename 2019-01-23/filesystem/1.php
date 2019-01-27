<?php

function filesInDirectory($scan, &$results = array())
{
	$files = scandir($scan);
    foreach($files as $key => $value){
        $path = realpath($scan.DIRECTORY_SEPARATOR.$value);
        if(!is_dir($path)) {
            $results[] = $path;
        } else if($value != "." && $value != ".." && $value != ".git") {
            filesInDirectory($path, $results);
            $results[] = $path;
        }
    }	
    sort($results);
    return $results;
}

echo '<pre>';
print_r(filesInDirectory('../..'));
echo '</pre>';
