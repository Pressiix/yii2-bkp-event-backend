<?php

return [
    // 'class' => 'yii\db\Connection',
    // 'dsn' => 'mysql:host=127.0.0.1;dbname=postdigital_ptd',
    // 'username' => 'postdigital_ptd',
    // 'password' => 'Thahxay8',
    // 'charset' => 'utf8',

    'class' => 'yii\db\Connection',
    'dsn' => !strpos($_SERVER['REQUEST_URI'],'heroku') ? 'mysql:host=127.0.0.1;dbname=postdigital_ptd' : 'mysql:host=us-cdbr-east-02.cleardb.com;dbname=heroku_d18bfef1a27cdf7',
    'username' => !strpos($_SERVER['REQUEST_URI'],'heroku') ? 'postdigital_ptd' : 'b3036e28d41b04',
    'password' => !strpos($_SERVER['REQUEST_URI'],'heroku') ? 'Thahxay8' : '97b98c1c',
    'charset' => 'utf8',

    // Schema cache options (for production environment)
    //'enableSchemaCache' => true,
    //'schemaCacheDuration' => 60,
    //'schemaCache' => 'cache',
];
