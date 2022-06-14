<?php

use App\Core\App;
//use App\Core\Database\Connection;
//use App\Core\Database\QueryBuilder;


if (!file_exists('../config.php')) {
    die('Please create a config file by copying from copy.sample.php!');
}


App::bind('config', require('../config.php'));

App::bind('database', new QueryBuilder(
    Connection::make(App::get('config')['database'])
));


//helpers
function view($name, $data = [])
{
    extract($data);

    return require dirname(dirname(__FILE__)) . "/views/{$name}.view.php";
}

function redirect($path)
{
    return header("Location: ./{$path}");
}
