<?php
require "../vendor/autoload.php";

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