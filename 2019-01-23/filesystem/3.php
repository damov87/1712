<?php

function filesInDirectoryWithSort($scan, $sortDir = true)
{
	if ($sortDir === true) {
		$directories = array();
	    $files_list  = array();
		$files = scandir($scan);
		foreach($files as $file){
		   // if(($file != '.') && ($file != '..')){
		      if(is_dir($scan . '/' . $file)){
		         $directories[] = $file;

		      }else{
		         $files_list[] = $file;

		      }
		   }
		// }

		usort($directories, function ($a, $b) {
	    return mb_strlen($a, 'UTF-8') - mb_strlen($b, 'UTF-8');
		});
		usort($files_list, function ($a, $b) {
	    return mb_strlen($a, 'UTF-8') - mb_strlen($b, 'UTF-8');
		});
		foreach($directories as $directory){
		   echo '<li class="folder">'.$directory.'</li>';
		}
		foreach($files_list as $file_list){
		   echo '<li class="file">'.$file_list.'</li>';
		}
	} elseif ($sortDir === false) {
		$files = scandir($scan);
		usort($files, function ($a, $b) {
	    return mb_strlen($a, 'UTF-8') - mb_strlen($b, 'UTF-8');
	});
		foreach($files as $files){
		   echo '<li class="file">'.$files.'</li>';
		}
	}
	
}

echo '<pre>';
print_r(filesInDirectoryWithSort('../..', false));
echo '</pre>';
