<?php

namespace App\Controllers;

class SeriesController
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