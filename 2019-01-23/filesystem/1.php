<?php

function filesInDirectory($scan)
{
	return $files = scandir($scan);
}

echo '<pre>';
print_r(filesInDirectory('../..'));
echo '</pre>';
