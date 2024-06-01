<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class CategoryController extends Controller
{
    public function getIndex(){
      $posts = Post::all();
      
      return view('category.index', compact('posts'));
      

    }

    public function getShow($id){
      $post = Post::find($id);
      
      return view('category.show', compact('post'));
      
      
    }

    public function getCreate(){
      return view('category.create');
      

    }

    public function getEdit($id){
      return view('category.edit', compact('id'));
      

    }

    public function store()
}
