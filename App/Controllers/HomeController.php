<?php namespace App\Controllers;

use Core\Controller;
use Core\View;

class HomeController extends Controller
{
    public function index()
    {
        /*
         * code view manual
         return View::render("index");
         */

        return View::renderTemplate("index");

    }


}