<?php

namespace Database;

class MysqlConnection implements DatabaseConnection
{
    private static ?MysqlConnection $connection = null;

    private function __construct()
    {
    }

    public static function getInstance(): MysqlConnection
    {
        self::$connection = is_null(self::$connection) ? new MysqlConnection() : self::$connection;
        return self::$connection;
    }
}