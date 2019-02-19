<?php
/**
 * Created by PhpStorm.
 * User: oshry
 * Date: 5/17/15
 * Time: 1:35 PM
 */
return [
    'default' => [
        'connection' => [
            'dsn'        => 'mysql:host=172.19.0.2;dbname=tripbase_php;charset=UTF8;',
            'username'   => 'root',
            'password'   => 'password',
//            'hostname' => '172.19.0.4',
//            'hostname' => '172.19.0.1',
//            'persistent' => FALSE,
            'options'    => [
                //'PDO::ATTR_PERSISTENT' => true,
//                'PDO::ATTR_ERRMODE'    => 'PDO::ERRMODE_EXCEPTION'
            ],
        ],
        'charset'      => 'utf8',
        'caching'      => FALSE,
    ]
];
