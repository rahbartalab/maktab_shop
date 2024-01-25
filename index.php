<?php
require_once __DIR__ . '/vendor/autoload.php';

use Database\MysqlConnection;
use Database\MysqlDatabase;

$connection = MysqlConnection::getInstance();
$connection->setPDO(new PDO('mysql:host=localhost;dbname=learnSQL', 'root'));
$mysqlDatabase = new MysqlDatabase($connection);


//$bands  = $mysqlDatabase->table('bands')->select()->execute()->fetchAll();
//$albums = $mysqlDatabase->table('albums')->select()->execute()->fetchAll();

$mysqlDatabase
    ->table('songs')
    ->delete()
    ->where('id', '25', '=')
    ->execute();



