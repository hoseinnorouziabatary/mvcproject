<?php

use \Illuminate\Database\Capsule\Manager as Capsule;

$capsule = new Capsule();


$capsule->addConnection([

    /*
     * code for file .env
     */
    'driver'=>getenv('DB_CONNECTION'),
    'host'=>getenv('DB_HOST'),
    'port'=>getenv('DB_PORT'),
    'database'=>getenv('DB_DATABASE'),
    'username'=>getenv('DB_USERNAME'),
    'password'=>getenv('DB_PASSWORD'),
    'charset'=>'utf8',
    'collation'=>'utf8_unicode_ci'



    /*code setting config const manually
     *
    'driver'=>'mysql',
    'host'=>\App\Config::DB_HOST,
    'port'=>\App\Config::DB_PORT,
    'database'=>\App\Config::DB_DATABASE,
    'username'=>\App\Config::DB_USERNAME,
    'password'=>\App\Config::DB_PASSWORD,
    'charset'=>'utf8',
    'collation'=>'utf8_unicode_ci'
    */
]);
$capsule->bootEloquent();