<?php

namespace App\Http\Controllers;
use App\Post;
use Illuminate\Http\Request;


class CommentsController extends Controller
{
    
 


    public function store(Post $post) {

        $this->validate(request(),[

            'name' => 'required',
            'text' => 'required'
    
    
         ]);
        
        

        
        $post->comments()->create([
            'name' => request('name'),
            'text' => request('text'),

        ]);
        
        return redirect('/posts/'.$post->id);
           
    }

}
