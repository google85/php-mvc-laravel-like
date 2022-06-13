<?php

require 'Task.php';

try {
    $pdo = new PDO('mysql:host=127.0.0.1;dbname=djbpfcom_dev_mytodo', 'djbpfcom_dev_1', 'Password321Password');
} catch (PDOException $e) {
    die('Could not connect.');
}

$stmt = $pdo->prepare('select * from todos');

$stmt->execute();

$tasks = $stmt->fetchAll(PDO::FETCH_OBJ, 'Task');

require 'index.view.php';