<?php
    include_once 'content.php';
    include_once 'form-prepare.php';
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link href='css/main.css' rel='stylesheet' type='text/css'>

    <title><?php echo $title; ?></title>
</head>
<body>
<?php
    echo $content;
    if (isset($_COOKIE['inputName'])) {
        echo '<h2 style="color: darkred">' .$_COOKIE['inputName'] . '</h2><br><br>';
        setcookie('inputName', 'DELETE IT', time());
    }
    if (isset($_COOKIE['inputPass'])) {
        echo '<h2 style="color: darkred">' .$_COOKIE['inputPass'] . '</h2><br><br>';
        setcookie('inputPass', 'DELETE IT', time());
    }
    if (isset($_COOKIE['success'])) {
        echo '<h1 style="color:#1e7e34">' . $_COOKIE['success'] . '</h1><br><br>';
        setcookie('success', 'DELETE IT', time());
    }
    echo form();
?>
</body>
</html>
