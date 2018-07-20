<?php

namespace App\Http\Controllers;
use App\Post;
use Illuminate\Http\Request;
use App\Mail\CommentRecevied;

class CommentsController extends Controller
{
    
 


    public function store(Post $post) {

        $this->validate(request(),[

            'name' => 'required',
            'text' => 'required'
    
    
         ]);
        
     
        $comment = $post->comments()->create([
            'name' => request('name'),
            'text' => request('text'),

        ]);

        \Mail::to($post->user)->send(new CommentRecevied($post, $comment));
        
        return redirect('posts/'.$post->id);
           
    }

}
