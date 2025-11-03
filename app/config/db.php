<?php
return [
    'class' => 'yii\db\Connection',
    'dsn' => 'pgsql:host=db;dbname=yii2db',
    'username' => 'yii2user',
    'password' => 'supersecretpassword',
    'charset' => 'utf8',
    'schemaCacheDuration' => 60,
    'schemaCache' => 'cache',
];