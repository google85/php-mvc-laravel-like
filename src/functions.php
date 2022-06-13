<?php

/**
 * connect to the database in PDO
 */
function connectToDb()
{
    try {
        return new PDO('mysql:host=127.0.0.1;dbname=djbpfcom_dev_mytodo', 'djbpfcom_dev_1', 'Password321Password');
    } catch (PDOException $e) {
        die('Could not connect, ' . $e->getMessage());
    }
}

/**
 * fetch all tasks from db
 */
function fetchAllTasks($pdo)
{
    $stmt = $pdo->prepare('select * from todos');
    $stmt->execute();

    return $stmt->fetchAll(PDO::FETCH_CLASS, 'Task');
}

/**
 * dump & die data
 */
function dd($data)
{
    echo '<pre>';
    die(var_dump($data));
    echo '</pre>';

}

