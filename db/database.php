<?php

// Make sure you have Composer's autoload file included
require '../vendor/autoload.php';

// Create a connection, once only.
$config = [
            'driver'    => 'mysql', // Db driver
            'host'      => 'localhost',
            'database'  => 'logistik-db',
            'username'  => 'root',
            'password'  => '',
            'charset'   => 'utf8', // Optional
            'collation' => 'utf8_unicode_ci', // Optional
            // 'prefix'    => 'cb_', // Table prefix, optional
            'options'   => [ // PDO constructor options, optional
                PDO::ATTR_TIMEOUT => 5,
                PDO::ATTR_EMULATE_PREPARES => false,
            ],
        ];

new \Pixie\Connection('mysql', $config, 'QueryPixie');
// $queryBuilder = (new \Pecee\Pixie\Connection('mysql', $config))->getQueryBuilder();