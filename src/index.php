<?php

use App\Core\{App, Router, Request};

error_reporting(E_ALL);
ini_set('display_errors', '1');

require 'vendor/autoload.php';
require 'core/bootstrap.php';

//optional base folder where the project is
$pathPrefix = App::get('config')['optional']['path_prefix'] ?? null;

Router::load('../app/routes.php')
    ->direct(
        Request::uri($pathPrefix),
        Request::method()
    );
