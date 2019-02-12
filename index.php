<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="utf-8">
  <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
  <link rel="shortcut icon" type="image/png" href="/img/favicon.png"/>
  <link rel="stylesheet" type="text/css" href="css/main.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <title>Homeworks</title>
</head>
<body>
  <div class="container col-lg-6 offset-lg-3">
    <h1 class="text-success text-center">Мои домашние задания:</h1>
    <ul class="center" type="none">
      <?php 
        $files = scandir('.');
        $pattern = '/(\d{4})-(\d{2})-(\d{2})/';
        $replacement = '$3.$2.$1';
        foreach ($files as $value) {
          if (preg_match($pattern, $value)) {
              $dir = preg_replace($pattern, $replacement, $value);
            if (file_exists("$value/index.php")) {
              echo '<li class="p-3 mb-2 bg-primary"><a class="text-white" href=' . "$value" . DIRECTORY_SEPARATOR . 'index.php' . '>Домашнее задание от ' . "$dir" . '</a></li>';     
            } elseif (file_exists("$value/index.html")) {
              echo '<li class="p-3 mb-2 bg-primary"><a class="text-white" href=' . "$value" . DIRECTORY_SEPARATOR . 'index.html' . '>Домашнее задание от ' . "$dir" . '</a></li>';     
            }
          }
        }
	    ?>
    </ul>
  </div>
</body>
</html>