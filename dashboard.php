<?php
session_start();
if(!@$_SESSION['user']){
    header('location: index.php');
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
<h1>Dashboard</h1>
<h3>welcome dear <?= $_SESSION['user']->username ?></h3>


</body>
</html>
