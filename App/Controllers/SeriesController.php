<?php namespace App\Controllers;

use Core\Controller;
use Core\View;

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

        /*
         * code view manual
         *  return View::render("series/episode",[
         */
        return View::renderTemplate("series.episode",[
            "slug"=> $slug,
            "id"=>$id
        ]);
    }
}