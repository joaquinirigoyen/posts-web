<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class CategoryController extends Controller
{
    public function getIndex(){
      $posts = Post::orderby('id','desc') /**_Recupera los registros de forma descendente */
      ->paginate(10); 
      
      return view('category.index', compact('posts'));
      

    }

    public function getShow($id){
      $post = Post::find($id);
      
      return view('category.show', compact('post'));
      
      
    }

    public function getCreate(){
      return view('category.create');
      

    }

    public function getEdit($post){
      $post = Post::find($post);
      return view('category.edit', compact('post'));
      

    }

    public function store(Request $request){
      $request->validate([
        'title' =>['required', 'min:5', 'max:255']
      ]);
      $post = new Post();
      $post->title = $request->title;
      $post->poster = $request->poster;
      $post->habilitated = false;
      $post->content = $request->content;
      $post->save();
      return redirect('/category');
    }

    public function update(Request $request, $post){
      $post = Post::find($post);
      $post->title = $request->title;
      $post->poster = $request->poster;
      $post->habilitated = false;
      $post->content = $request->content;
      $post->save();
      return redirect("/category/show/{$post->id}");
    }

    public function destroy($post){
      $post = Post::find($post);
      $post->delete();
      return redirect('/category');

    }



}
