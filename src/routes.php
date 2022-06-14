<?php

$router->get('', 'PagesController@home');
$router->get('about', 'PagesController@about');
$router->get('contact-us', 'PagesController@contact');
//$router->post('names', 'PagesController@store');