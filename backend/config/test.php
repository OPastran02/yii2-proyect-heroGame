<?php
return [
    'id' => 'app-backend-tests',
    'components' => [
        'assetManager' => [
            'basePath' => __DIR__ . '/../web/assets',
        ],
        'urlManager' => [
            'showScriptName' => true,
        ],
        'request' => [
            'cookieValidationKey' => 'test',
        ],
        'db' => [
            'class' => \yii\db\Connection::class,
            'dsn' => 'mysql:host=localhost;dbname=yii2basic;port=3307', 
            'username' => 'root',
            'password' => '',
            'charset' => 'utf8',
            'enableSchemaCache' => true, // Opcional, para mejorar el rendimiento
            'enableLogging' => true,    // Habilitar el registro de consultas SQL
            'enableProfiling' => true,  // Habilitar el perfilado de consultas
        ],
        'log' => [
            'targets' => [
                // ...
                [
                    'class' => 'yii\log\DbTarget',
                    'levels' => ['error', 'warning', 'info', 'trace'],
                    'categories' => ['yii\db\*'],
                    'logVars' => [],
                ],
            ],
        ],
    ],
];
