<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');

$database = require 'core/bootstrap.php';

$uri = $_SERVER['REQUEST_URI'];
//optional
if (!empty($config['optional']['path_prefix'])) {
    $uri = str_replace($config['optional']['path_prefix'], '', $uri);
}
$uri = trim($uri, '/');

require Router::load('../routes.php')
    ->direct($uri);
