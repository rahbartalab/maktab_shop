<?php

namespace Database;

interface DatabaseInterface
{
    public function table(string $table);

    public function insert(array $fields);

    public function update(array $fields);

    public function select(array $columns = ['*']);

    public function delete();

    public function where(string $column  , string $value , string $operation);

    public function execute();

    public function fetchAll(): array;
}