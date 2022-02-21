<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header("Location: auth.html");
}
require_once 'DbConnect.php';
$post = $_POST;
try {
    if (signUp($post['login'], $post['password'])) {
        $_SESSION['login'] = $post['login'];
        echo 'SUCCESS';
    } else {
        echo 'WRONG';
    }
} catch (PDOException $e) {
    echo $e->getMessage();
}

function signUp($login, $pwd){
    $connection = DbConnect::getInstance()->getConnection();
    $sql = "SELECT * FROM auth WHERE login = :login AND password = :pwd;";
    $params = [
        'login' => $login,
        'pwd' => $pwd
    ];
    $statement = $connection->prepare($sql);
    $statement->execute($params);
    return $statement->fetch(PDO::FETCH_BOUND);
}