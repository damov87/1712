<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="utf-8">
  <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/main.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <title>Homework 14-01-2019</title>
</head>
<body>
  <a class="home" href="../index.php">На главную</a>
  <div class="container col-lg-6 offset-lg-3">
    <h1 class="text-success text-center">14/01/2019</h1>
    <ul class="center" type="none">
    <?php for ($i=1; $i <= 4; $i++) { ?>
      <li class="p-3 mb-2 bg-primary"><a class="text-white" href="<?=$i?>.php">Задание №<?=$i?></a></li>
    <?php } ?>
    </ul>
  </div>
</body>
</html>