<?php

//namespace App\Core\Database;

class Connection
{
    /**
     * make the connection to the database
     * 
     * @param array $config
     * @return \PDO object
     */
    public static function make($config)
    {
        try {
            return new \PDO($config['connection'].';dbname='.$config['name'],
                $config['username'],
                $config['password'],
                $config['options']
            );
        } catch (\PDOException $e) {
            die('Could not connect, ' . $e->getMessage());
        }
    }
}