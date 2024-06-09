<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class HomeController extends Controller
{
    public function getHome(){
      return view('home');
      

    }

    public function getIndex(){
     

      $posts = Post::orderby('idpost','desc') /**_Recupera los registros de forma descendente */
      ->paginate(10); 
      
      return view('category.index', compact('posts'));
      

    }
}
