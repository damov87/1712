<?php

function filesInDirectoryWithSearch($scan, $search)
{
	$files = scandir($scan);

	for ($i = 0; $i < count($files); $i++) {
        $pos=strpos($files[$i],$search);
        if($pos!==false){
            $result[]=$files[$i];
        }
    }return $result;
}

echo '<pre>';
print_r(filesInDirectoryWithSearch('../..', '201'));
echo '</pre>';
