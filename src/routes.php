<?php

$router->get('', 'controllers/index.php');
$router->get('about', 'controllers/about.php');
$router->get('contact-us', 'controllers/contact.php');
$router->post('names', 'controllers/add-name.php');