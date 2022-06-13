<?php

try {
    $pdo = new PDO('mysql:host=127.0.0.1;dbname=djbpfcom_dev_mytodo', 'djbpfcom_dev_1', 'password');
} catch (PDOException $e) {
    die('Could not connect.');
}
require 'index.view.php';