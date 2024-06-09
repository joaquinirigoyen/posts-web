<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


class CategoryController extends Controller
{
    public function getIndex(){
      $user = Auth::user();

      $posts = Post::where('iduser', $user->id)
      ->orderby('idpost','desc') /**_Recupera los registros de forma descendente */
      ->paginate(10);
      
      return view('category.index', compact('posts'));
      

    }

    public function getShow($idpost){
      $post = Post::find($idpost);
      
      $user = User::find($post->iduser);
      
      return view('category.show', compact('post', 'user'));
      
      
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
        'title' =>['required', 'min:5', 'max:255'],
        
        'content' =>['required', 'min:5']

      ]);
      $user = Auth::user();
      $post = new Post();
      $post->title = $request->title;
      
      $post->habilitated = false;
      $post->content = $request->content;
      $post->iduser = $user->id;

      $post->save();
      return redirect('/category');
    }

    public function update(Request $request, $post){
      $post = Post::find($post);
      $post->title = $request->title;
      
      $post->habilitated = false;
      $post->content = $request->content;
      $post->save();
      return redirect("/category/show/{$post->idpost}");
    }

    public function destroy($post){
      $post = Post::find($post);
      $post->delete();
      return redirect('/category');

    }



}
