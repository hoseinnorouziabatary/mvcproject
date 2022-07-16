<?php namespace App\Controllers;

use App\Models\Article;
use App\Models\User;
use Core\Controller;
use Core\View;

class HomeController extends Controller
{
    public function index()
    {

        var_dump(User::all());


        /*
         * code view manual
         return View::render("index");
         */

        /*
         * About code view blade
         * return View::renderTemplate("index");
         */

        /*
         * Code about the topic of the model manually
        $user= new User();
        var_dump($user->SelectAll());die();
        var_dump($user->findUser(1));die();
        $article= new Article();
        var_dump($article->SelectAll());die();
        */


    }


}