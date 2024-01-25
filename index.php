<?php
require_once __DIR__ . '/vendor/autoload.php';
use Database\MysqlConnection;


$connectionOne = MysqlConnection::getInstance();
$connectionTwo = MysqlConnection::getInstance();

dd($connectionOne ,  $connectionTwo);