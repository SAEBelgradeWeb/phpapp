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

    public function insert($tableName, $data)
    {

        $sql = sprintf(
            'INSERT INTO %s (%s) VALUES(%s)',
            $tableName,
            implode(', ', array_keys($data)),
            ":" . implode(', :', array_keys($data))
        );

        try {
            $query = $this->pdo->prepare($sql);

            $query->execute($data);
        } catch (Exception $exception) {
            echo $exception->getMessage();
            die;
        }
    }
}