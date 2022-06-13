<?php

require 'functions.php';
require 'Task.php';

$pdo = connectToDb();


$stmt = $pdo->prepare('select * from todos');

$stmt->execute();

$tasks = $stmt->fetchAll(PDO::FETCH_CLASS, 'Task');

var_Dump($tasks[0]->foobar());

require 'index.view.php';
