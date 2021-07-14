<?php

class QueryBuilder
{
    public $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function selectAll($tableName)
    {
        $query = $this->pdo->prepare("SELECT * FROM {$tableName}");
        $query->execute();
        return $query->fetchAll(PDO::FETCH_OBJ);
    }
}