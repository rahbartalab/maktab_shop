<?php

namespace Database;

use PDO;

class MysqlConnection implements DatabaseConnection
{
    private static ?MysqlConnection $connection = null;
    private PDO $pdo;

    private function __construct()
    {
    }

    public static function getInstance(): MysqlConnection
    {
        self::$connection = is_null(self::$connection) ? new MysqlConnection() : self::$connection;
        return self::$connection;
    }

    public function setPDO(PDO $pdo): void
    {
        $this->pdo = $pdo;
    }

    public function getPDO(): PDO
    {
        return $this->pdo;
    }
}