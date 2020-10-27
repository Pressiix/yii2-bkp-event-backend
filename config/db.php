<?php

if(strpos($_SERVER['REQUEST_URI'],'heroku'))
{
    return [
    
        'class' => 'yii\db\Connection',
        'dsn' => 'mysql:host=us-cdbr-east-02.cleardb.com;dbname=heroku_d18bfef1a27cdf7',
        'username' => 'b3036e28d41b04',
        'password' => '97b98c1c',
        'charset' => 'utf8',
    
        // Schema cache options (for production environment)
        //'enableSchemaCache' => true,
        //'schemaCacheDuration' => 60,
        //'schemaCache' => 'cache',
    ];
}else{
    return [
        'class' => 'yii\db\Connection',
        'dsn' => 'mysql:host=localhost;dbname=postdigital_ptd',
        'username' => 'postdigital_ptd',
        'password' => 'Thahxay8',
        'charset' => 'utf8',
    
        // Schema cache options (for production environment)
        //'enableSchemaCache' => true,
        //'schemaCacheDuration' => 60,
        //'schemaCache' => 'cache',
    ];
}

