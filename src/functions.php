<?php

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


