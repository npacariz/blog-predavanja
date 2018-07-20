<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Tag;
class TagController extends Controller
{
    public function show($name)
    {
       
        $TagModel = Tag::whereName($name)->first();
        $posts = $TagModel->posts;
        
        return view('posts.index', compact('posts'));    
    }
}
