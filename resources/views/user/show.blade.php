@extends('layouts.master')

    @section('content')
    
        @foreach($user->posts as $post)

             <div class="blog-post">

             <a href="/posts/{{$post->id}}"> <h2 class="blog-post-title">{{$post->title}}</h2></a> 
             <p class="blog-post-meta"> {{$post->created_at}} by <a href="/users/{{$post->user->id}}">{{$post->user->name}}</a></p>
    
                <p>{{$post->body}}</p>
                
              </div><!-- /.blog-post -->

        @endforeach


            

    @endsection