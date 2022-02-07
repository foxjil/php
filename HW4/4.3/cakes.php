<?php
$cakes = require_once 'cakes_data.php';
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Тортики</title>
    <link rel="stylesheet" href="css/cakes.css">
</head>
<body>
<main>
    <? foreach ($cakes as $cake): ?>
    <div class="cake">
        <h2><?= $cake['name'] ?></h2>
        <div>
            <img src="/images/<?= $cake['main_img'] ?>">
        </div>
        <p>Стоимость: <?= $cake['price'] . $cake['currency'] ?></p>
        <button>Подробнее</button>
    </div>
    <? endforeach; ?>
</main>
</body>
</html>