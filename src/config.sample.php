<?php

return [
    'database' => [
        'name'     => 'db_name',
        'username' => 'root',
        'password' => '',
        'connection' => 'mysql:host=127.0.0.1',
        'options' => [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]
    ],
    'optional' => [
        'path_prefix' => '/folder'     //prefix from path to be removed
    ]
];