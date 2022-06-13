<?php

class QueryBuilder
{
    protected $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }
    
    /**
    * fetch all objects from table db
    */
    public function selectAll($table)
    {
        $stmt = $this->pdo->prepare("select * from {$table}");
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_CLASS/*, 'Task'*/);
    }
}