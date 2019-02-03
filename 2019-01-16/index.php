<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="utf-8">
  <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/main.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <title>Homework 16-01-2019</title>
</head>
<body>
  <a class="home" href="../index.html">На главную</a>
  <div class="container col-lg-6 offset-lg-3">
    <h1 class="text-success text-center">16/01/2019 (основы)</h1>
    <ul class="center" type="none">
      <?php 
      for ($i=5; $i <= 27; $i++) { 
        $filenameForms = "basics/{$i}/{$i}.html";
        if (file_exists($filenameForms)) {
          echo '<li class="p-3 mb-2 bg-primary"><a class="text-white" href="basics/' . "{$i}/{$i}.html" . '"' . '>Задание №' . "{$i}" . '</a></li>';
        } else {
          echo '<li class="p-3 mb-2 bg-primary"><a class="text-white" href="basics/' . "{$i}.php" . '"' . '>Задание №' . "{$i}" . '</a></li>';
        }
      }
      ?>

    <h1 class="text-success text-center">16/01/2019 (массивы)</h1>
      <?php for ($i=1; $i <= 28; $i++) { ?>
        <li class="p-3 mb-2 bg-primary"><a class="text-white" href="arrays/<?=$i?>.php">Задание №<?=$i?></a></li>
      <?php } ?>
    </ul>
  </div>
</body>
</html>