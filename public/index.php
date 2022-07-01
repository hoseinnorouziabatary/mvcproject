<?php
require "../vendor/autoload.php";


$router = new Core\Router();

$router->add('/series',['uses'=>'SeriesController@index']);
$router->add('/series/{slug}','SeriesController@serie');
$router->add('/series/{slug}/episode/{id}','SeriesController@episode');

$url =  $_SERVER["QUERY_STRING"];
echo "my ulr : " . $url ."<br>";


echo "<pre>";
var_dump($router->getRoutes());
echo "<pre>";

if ($router->match($url)){
    echo "<pre>";
    var_dump($router->getParams());
    echo "<pre>";
}else{
    echo "not your url:{$url}";
}