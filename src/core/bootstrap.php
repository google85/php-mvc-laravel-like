<?php

if (!file_exists('../config.php')) {
    die('Please create a config file by copying from copy.sample.php!');
}


App::bind('config', require('../config.php'));

App::bind('database', new QueryBuilder(
    Connection::make(App::get('config')['database'])
));

function view($name, $data = null)
{
    extract($data);
    return require dirname(dirname(__FILE__)) . "/views/{$name}.view.php";
}
