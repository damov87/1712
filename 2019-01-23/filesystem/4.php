<?php

// Вывыести список файлов отсортированных по количеству одинаковых типов (расширений).
// Например есть директория с двумя *.txt файлами и тремя *.bmp, вначале должны быть в списке файлы с расширением *.bmp, а потом *.txt
// Не забываем, что файлы внутри одной одинаковой группы, должны сортироваться по алфавиту
// (выбирайте расположение где есть несколько папок, несколько файлов, есть скрытые и системные файлы/папки)

function filesInDirectoryWithTypes($scan) // Пока что только подсчет количества каждого типа файлов без самой сортировки
{
		$files = scandir($scan);
		$directories = [];
	    $files_list  = [];

		foreach ($files as $file) {
		      if (is_dir($scan . '/' . $file)) {
		         $directories[] = $file;
		      } else {
		         $files_list[] = $file;
		      }
		}

		foreach ($files_list as $key => $value) {
			$myPathInfo = pathinfo($value);
			if (isset($myPathInfo['extension']) === true) {
				$ext[] = $myPathInfo['extension'];
			}
		}

		echo '<pre>';
		print_r($ext);
		echo '</pre>';

		$extCount = array_count_values($ext);
		arsort($extCount);

		echo '<pre>';
		print_r($extCount);
		echo '</pre>';

		foreach($directories as $directory){
		   echo '<li type="circle">'.$directory.'</li>';
		}
		foreach($files_list as $file_list){
		   echo '<li>'.$file_list.'</li>';
		}
}

echo '<pre>';
print_r(filesInDirectoryWithTypes('../..'));
echo '</pre>';
