@extends('layouts.master')

    @section('content')
    
        @foreach($posts as $post)

             <div class="blog-post">
             <a href="posts/{{$post->id}}"> <h2 class="blog-post-title">{{$post->title}}</h2></a> 
             <p class="blog-post-meta"> {{$post->created_at}} by <a href="/users/{{$post->user->id}}">{{$post->user->name}}</a></p>
             <p>Tags:</p>
             @foreach($post->tags as $tag)
                 <a href="/posts/tags/{{$tag->name}}">{{$tag->name}}</a>  
            @endforeach
                <p>{{$post->body}}</p>
                
              </div><!-- /.blog-post -->

        @endforeach


            

    @endsection