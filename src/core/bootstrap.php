<?php

use App\Core\App;

if (!file_exists('../config.php')) {
    die('Please create a config file by copying from copy.sample.php!');
}


App::bind('config', require('../config.php'));

App::bind('database', new QueryBuilder(
    Connection::make(App::get('config')['database'])
));


//helpers

/**
 * display a view page
 * 
 * @param string $name
 * @param mixed $data
 * @return string content of the view
 */
function view($name, $data = [])
{
    extract($data);

    return require dirname(dirname(__FILE__)) . "/app/views/{$name}.view.php";
}

/**
 * redirect to a path
 * 
 * @param string $path
 * @return header redirect
 */
function redirect($path)
{
    header("Location: ./{$path}");
}
