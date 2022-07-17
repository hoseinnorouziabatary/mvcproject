<?php

use \Illuminate\Database\Capsule\Manager as Capsule;

$capsule = new Capsule();

//var_dump(env('DB_DATABASE'));die();

$capsule->addConnection([


/*  code for file .env about phpdotenv
    */
    'driver'=>env('DB_CONNECTION'),
    'host'=>env('DB_HOST'),
    'port'=>env('DB_PORT'),
    'database'=>env('DB_DATABASE'),
    'username'=>env('DB_USERNAME'),
    'password'=>env('DB_PASSWORD'),
    'charset'=>'utf8',
    'collation'=>'utf8_unicode_ci'


    /*
     * code for file .env about phpdotenv
     *
    'driver'=>getenv('DB_CONNECTION'),
    'host'=>getenv('DB_HOST'),
    'port'=>getenv('DB_PORT'),
    'database'=>getenv('DB_DATABASE'),
    'username'=>getenv('DB_USERNAME'),
    'password'=>getenv('DB_PASSWORD'),
    'charset'=>'utf8',
    'collation'=>'utf8_unicode_ci'
    */



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