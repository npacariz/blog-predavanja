<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;
use App\Tag;

class PostsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth', ['except'=>['index','show']]);
    }


    public function index()
    {
        $posts = Post::with('user')->latest()->paginate(10);
   
         return view('posts/index', compact("posts"));
    }


    public function show($id)
    {
        $posts = Post::with('comments')->findOrFail($id);
    
         return view('posts.show', compact("posts"));
        
    }

    public function create() {

        $tags = Tag::all();
        return view('posts.create', compact('tags'));
    }

    public function store() {
       
        $this->validate(request(),[
            'title' => 'required',
            'body' => 'required',
            'tags' => 'required|array'
        ]);


      $post = Post::create([
        'body' => request('body'),
        'title' => request('title'),
        'published' => request('published'),
        'user_id' => auth()->user()->id
      ]);

      $post->tags()->attach(request('tags'));


      return redirect('/posts');
    }

}
