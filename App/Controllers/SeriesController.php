<?php namespace App\Controllers;

use Core\Controller;

class SeriesController extends Controller
{
    public function index()
    {
        return "index page";
    }
    public function serie($slug){
        return "serie page";
    }
    public function episode($slug,$id){
        return "slug : {$slug} id: {$id}";
    }
}