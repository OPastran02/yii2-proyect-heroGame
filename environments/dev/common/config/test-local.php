<?php

return [
    'components' => [
        'db' => [
            'class' => \yii\db\Connection::class,
            'dsn' => 'mysql:host=localhost;dbname=yii2basic;port=3307', 
            'username' => 'root',
            'password' => '',
            'charset' => 'utf8',
        ],
    ],
];
