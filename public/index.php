<?php
require "../vendor/autoload.php";

error_reporting(E_ALL);
set_error_handler('Core\Error::errorHandler');
set_exception_handler('Core\Error::exceptionHandler');

$router = require "../App/Router.php";
$router->dispatch($_SERVER["QUERY_STRING"]);

//echo "my ulr : " . $url ."<br>";
//
//
//echo "<pre>";
//var_dump($router->getRoutes());
//echo "<pre>";
//
//if ($router->match($url)){
//    echo "<pre>";
//    var_dump($router->getParams());
//    echo "<pre>";
//}else{
//    echo "not your url:{$url}";
//}