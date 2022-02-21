<?php

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header("Location: auth.html");
}
require_once 'DbConnect.php';
$post = $_POST;
try {
    if (checkUser($post['login'])) {
        echo '<p>Пользователь с таким именем уже существует!</p>';
        echo '<a href="auth.html">Вернуться на страницу регистрации</a>';

    } else
    {
        if (addUser($post['login'], $post['email'], $post['phone'], $post['password']))
            echo 'Вы успешно зарегистрированы!';
        else echo 'Ошибка при регистрации. Попробуйте ещё раз';
    }
} catch (PDOException $e) {
    echo $e->getMessage();
    echo 'Ошибка при регистрации. Попробуйте ещё раз';
}

function checkUser($login){
    $connection = DbConnect::getInstance()->getConnection();
    $sql = "SELECT * FROM auth_test WHERE login = :login;";
    $params = [
        'login' => $login
    ];
    $statement = $connection->prepare($sql);
    $statement->execute($params);
    return $statement->fetch(PDO::FETCH_BOUND);
}

function addUser($login, $email, $phone, $pwd){
    $connection = DbConnect::getInstance()->getConnection();
    $sql = "INSERT INTO auth(login, password) VALUE (:login, :pwd);";
    $params = [
        'login' => $login,
        'pwd' => $pwd
    ];
    $statement = $connection->prepare($sql);
    return $statement->execute($params);
}