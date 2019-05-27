<?php

// Вывыести список файлов и директорий отсортированных по количеству символов в названии.
// Директории сортируются отдельно или вместе с файлами.
// Вид сортировки директорий задается как параметр функции.
// Не забываем, что файлы/папки внутри одной одинаковой группы, должны сортироваться по алфавиту
// (выбирайте расположение где есть несколько папок, несколько файлов, есть скрытые и системные файлы/папки)

function filesInDirectoryWithSort($scan, $sortDir = true)
{
	if ($sortDir === true) {
		$directories = array();
	    $files_list  = array();
		$files = scandir($scan);
		foreach($files as $file) {
		    if (is_dir($scan . '/' . $file)) {
		        $directories[] = $file;
		    } else {
		        $files_list[] = $file;
		    }
		}

		usort($directories, function ($a, $b) {
	    	return mb_strlen($a, 'UTF-8') <=> mb_strlen($b, 'UTF-8');
		});
		usort($files_list, function ($a, $b) {
	    	return mb_strlen($a, 'UTF-8') <=> mb_strlen($b, 'UTF-8');
		});
		foreach($directories as $directory){
		   echo '<li type="circle">' . $directory . '</li>';
		}
		foreach($files_list as $file_list){
		   echo '<li>' . $file_list . '</li>';
		}
	} elseif ($sortDir === false) {
		$files = scandir($scan);
		usort($files, function ($a, $b) {
	    	return mb_strlen($a, 'UTF-8') <=> mb_strlen($b, 'UTF-8');
		});
		foreach($files as $files){
		   echo '<li>' . $files . '</li>';
		}
	}
	
}

echo '<pre>';
print_r(filesInDirectoryWithSort('../..', ));
echo '</pre>';
