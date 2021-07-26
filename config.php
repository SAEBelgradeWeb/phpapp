<?php

return [
    'database' => [
        'hostname' => '127.0.0.1',
        'database' => 'class_app',
        'username' => 'root',
        'password' => '',
        'options' => [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]
    ],
    'mail' => [
        'from' => 'mymail@phpapp.test',
        'from_name' => 'My Application',
        'smtp' => 'smtp.mailtrap.io',
        'port' => 2525,
        'username' => '',
        'password' => ''
    ]
];


