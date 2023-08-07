<?php

use yii\db\Connection;
use yii\db\Exception;

// ...

public function testDatabaseConnection()
{
    $db = new Connection([
        'dsn' => 'mysql:host=localhost;dbname=yii2basic;port=3307', 
        'username' => 'root',
        'password' => '',
        'charset' => 'utf8',
    ]);

    try {
        $db->open();
        $this->assertTrue(true, 'Database connection successful.');
    } catch (Exception $e) {
        $this->fail('Database connection failed: ' . $e->getMessage());
    }
}