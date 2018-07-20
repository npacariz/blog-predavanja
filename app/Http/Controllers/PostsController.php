<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;


class PostsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth', ['except'=>['index','show']]);
    }


    public function index()
    {
        $posts = Post::published();
   
         return view('posts/index', compact("posts"));
    }


    public function show($id)
    {
        $posts = Post::with('comments')->findOrFail($id);
    
         return view('posts.show', compact("posts"));
        
    }

    public function create() {

        return view('posts.create');
    }

    public function store() {
       
        $this->validate(request(),[
            'title' => 'required',
            'body' => 'required'
        ]);


      Post::create([
        'body' => request('body'),
        'title' => request('title'),
        'published' => request('published'),
        'user_id' => auth()->user()->id
      ]);

      return redirect('/posts');
    }

}
