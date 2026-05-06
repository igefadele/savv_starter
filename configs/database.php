<?php 

return [
    'is_active' => false, // Set to 'false' to disable DB connection and related features
    'driver'    => 'mysql',
    'host'      => '127.0.0.1',
    'database'  => 'savv_db',
    'username'  => 'root',
    'password'  => '',
    'charset'   => 'utf8mb4',
    'collation' => 'utf8mb4_unicode_ci',

    'redis' => [
        'is_active' => false, // Set to 'false' to disable Redis connection and related features
        'host' => '127.0.0.1',
        'port' => 6379,
        'database' => 0,
    ],
];