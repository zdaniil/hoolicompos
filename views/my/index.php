<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h2>Index</h2>
<?= $hi; ?> <br>

<?php
foreach ($names as $name) {
    echo $name . '<br>';
}

?> <!--просто выводим массив*/-->
</body>
</html>