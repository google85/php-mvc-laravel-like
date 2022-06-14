<?php

$app = [];

if (!file_exists('../config.php')) {
    die('Please create a config file by copying from copy.sample.php!');
}

$app['config'] = require '../config.php';


$app['database'] = new QueryBuilder(
    Connection::make($app['config']['database'])
);