<?php

// Написать функцию, которая выводит список файлов в заданной директории, которые содержат искомое слово.
// Директория и искомое слово задаются как параметры функции.
// Не забываем, что файлы внутри одной одинаковой группы, должны сортироваться по алфавиту
// (выбирайте расположение где есть несколько папок, несколько файлов, есть скрытые и системные файлы/папки)

function filesInDirectoryWithSearch($scan, $search)
{
	$files = scandir($scan);

	for ($i = 0; $i < count($files); $i++) {
        $pos = strpos($files[$i], $search);
        if ($pos !== false) {
            $result[] = $files[$i];
        }
    }return $result;
}

echo '<pre>';
print_r(filesInDirectoryWithSearch('../..', '201'));
echo '</pre>';
