<?php

/**
 * define all routes for the application
 */
$router->get('', 'PagesController@home');
$router->get('about', 'PagesController@about');
$router->get('contact-us', 'PagesController@contact');

$router->get('users', 'UsersController@index');
$router->post('users', 'UsersController@store');
