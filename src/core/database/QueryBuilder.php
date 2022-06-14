<?php

//namespace App\Core\Database;

class QueryBuilder
{
    protected $pdo;

    public function __construct(\PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    /**
     * fetch all objects from table db
     * @param string $table
     * @param string $intoClass - class into which the data is fetched
     */
    public function selectAll($table)
    {
        $stmt = $this->pdo->prepare("select * from {$table}");
        $stmt->execute();

        return $stmt->fetchAll(\PDO::FETCH_CLASS);
    }
    
    /**
     * add a set of values into a database table
     */
    public function insert($table, $params)
    {
        array_keys($params);
        
        $sql = sprintf(
            'insert into %s (%s) values (%s)',
            $table,
            implode(', ', array_keys($params)),
            ':' . implode(', :', array_keys($params))
        );
        
        try {
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute($params);
        } catch (\Exception $e) {
            die('Shoops, something went wrong.');
        }
        
        
        
        
    }
}