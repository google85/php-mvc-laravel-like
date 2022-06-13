<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');

$query = require 'bootstrap.php';

require 'Task.php';


$tasks = $query->selectAll('todos');

require 'index.view.php';
