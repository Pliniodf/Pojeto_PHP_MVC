<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    require './core/Config.php';
    require './vendor/autoload.php';

    use Core\ConfigController as Home;
    $Url = new Home();
    $Url->carregar();
    ?>
</body>
</html>