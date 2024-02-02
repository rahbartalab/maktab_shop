<?php

use Database\MysqlConnection;
use Database\MysqlDatabase;

require_once __DIR__ . '/vendor/autoload.php';

session_start();


$connection = MysqlConnection::getInstance();
$connection->setPDO(new PDO('mysql:host=localhost;dbname=learnSql', 'root'));
$builder = new MysqlDatabase($connection);

if (isset($_COOKIE['user_id'])) {
    $_SESSION['user'] = $builder
        ->table('users')
        ->select()
        ->where('id', $_COOKIE['user_id'], '=')
        ->execute()
        ->fetch();
}

if (@$_SESSION['user']) {
    header('location: dashboard.php');
}


if (isset($_POST['submit'])) {

    $user = $builder->table('users')->select()
        ->where('username', $_POST['username'], '=')
        ->where('password', $_POST['password'], '=')
        ->execute()
        ->fetch();

    if ($user) {
        $_SESSION['user'] = $user;
        setcookie('user_id', $user->id, time() + 30);
        header('location: dashboard.php');
    } else {
        echo 'invalid username or password';
    }

}


?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<form action="" method="post">
    <label for="username">username</label>
    <input type="text" id="username" name="username">
    <label for="password">password</label>
    <input type="password" name="password" id="password">
    <input type="submit" name="submit">
</form>

</body>
</html>
