<?php

return [

    'database' => [
        'name' => 'dbname', /* input your database name*/
        'username' => 'root', /* input your database username*/
        'password' => 'xxx', /* input your database password*/
        'connection' => 'mysql:host=127.0.0.1', /* input your host connection*/
        'option' => [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]
    ]

];