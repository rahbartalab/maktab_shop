<?php

namespace Database;

use PDOStatement;
use PDO;

class MysqlDatabase implements DatabaseInterface
{
    private MysqlConnection $connection;
    private string $table;
    private string $query = '';
    private ?PDOStatement $statement = null;

    public function __construct(MysqlConnection $connection)
    {
        $this->connection = $connection;
    }

    public function getConnection(): MysqlConnection
    {
        return $this->connection;
    }

    public function table(string $table): self
    {
        $this->query = '';
        $this->table = $table;
        return $this;
    }

    public function insert(array $fields)
    {
        // TODO: Implement insert() method.
    }

    public function update(array $fields)
    {
        // TODO: Implement update() method.
    }

    public function select(array $columns = ['*'])
    {
        // ['*']
        // ['id' , 'name'] -> id , name ...
        // select * from table
        $pattern = 'select %s from %s';
        $this->query .= sprintf($pattern, implode(',', $columns), $this->table);
        return $this;
    }

    public function delete(): self
    {
        $pattern = 'delete from %s';
        $this->query .= sprintf($pattern, $this->table);
        return $this;
    }

    public function execute(): self
    {
        $this->statement = $this->connection->getPDO()->prepare($this->query);
        $this->statement->execute();
        return $this;
    }

    public function fetchAll(): array
    {
        return $this->statement->fetchAll(PDO::FETCH_OBJ);
    }

    public function fetch()
    {
        return $this->statement->fetch(PDO::FETCH_OBJ);
    }

    public function where(string $column, string $value, string $operation): self
    {
        // where $column $operation $value -> id(column) =(operation) 2(value)
        if (!str_contains($this->query, 'where')) {
            $this->query .= ' where';
        } else {
            $this->query .= ' and';
        }

        $pattern = " $column $operation '$value'";
        $this->query .= $pattern;
        return $this;
    }
}