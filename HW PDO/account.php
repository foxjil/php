<?php
session_start();
if (!isset($_SESSION['login'])){
    header('Location: auth.html');
}
$login = $_SESSION['login'];
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Личный кабинет</title>
</head>
<body>
<h1><?= $login ?>, личный кабинет</h1>
</body>
</html>