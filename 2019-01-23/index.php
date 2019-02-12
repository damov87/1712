<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="utf-8">
  <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/main.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <title>Homework 23-01-2019</title>
</head>
<body>
  <a class="home" href="../index.php">На главную</a>
  <div class="container col-lg-6 offset-lg-3">
    <h1 class="text-success text-center">Файловая система</h1>
    <ul class="center" type="none">
    <?php for ($i=1; $i <= 3; $i++) { ?>
      <li class="p-3 mb-2 bg-primary"><a class="text-white" href="filesystem/<?=$i?>.php">Задание №<?=$i?></a></li>
    <?php } ?>
    <h1 class="text-success text-center">Функции и формы</h1>

    <?php 
    for ($i=1; $i <= 7; $i++) { 
      $filenameForms = "forms/{$i}/{$i}.html";
      if (file_exists($filenameForms)) {
        echo '<li class="p-3 mb-2 bg-primary"><a class="text-white" href="forms/' . "{$i}/{$i}.html" . '"' . '>Задание №' . "{$i}" . '</a></li>';
      } else {
        echo '<li class="p-3 mb-2 bg-primary"><a class="text-white" href="forms/' . "{$i}.php" . '"' . '>Задание №' . "{$i}" . '</a></li>';
      }
    }
    ?>

    <h1 class="text-success text-center">Алгоритмы (основы)</h1>
    <?php for ($i=1; $i <= 15; $i++) { ?>
      <li class="p-3 mb-2 bg-primary"><a class="text-white" href="maximum-basics/<?=$i?>.php">Задание №<?=$i?></a></li>
    <?php } ?>
    </ul>
  </div>
</body>
</html>