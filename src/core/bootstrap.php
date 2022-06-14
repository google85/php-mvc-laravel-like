<?php



if (!file_exists('../config.php')) {
    die('Please create a config file by copying from copy.sample.php!');
}


App::bind('config', require('../config.php'));

//die(var_dump(App::get('config')));

//$config = App::get('config');


//$app = [];
//$app['config'] = require '../config.php';
//$app['database'] = 

App::bind('database', new QueryBuilder(
    Connection::make(App::get('config')['database'])
));
