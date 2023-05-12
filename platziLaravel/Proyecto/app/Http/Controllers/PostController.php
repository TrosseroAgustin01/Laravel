<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        return view('posts.index',[
            'posts' => Post::latest()->paginate(),
        ]);
    }

    public function destroy(Post $post){
        $post->delete();
        
        return back(); // estas funcion nos retorna de manera automatica a la vista anterior;
    }

    public function create(Post $post){
        return view('posts.create',[
            'post' => $post,
        ]);
    }

    public function store(Request $request){
        $post = $request->user()->post()->create([
            'title' => $title = $request->title,
            'body' => $request->body,
            'slug' => $title
        ]);

    }

    public function edit(Post $post){
        return view('posts.edit',[
            'post' => $post,
        ]);
    }
}
