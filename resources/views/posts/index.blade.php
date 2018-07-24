@extends('layouts.master')

    @section('content')
    
        @foreach($posts as $post)

            <div class="blog-post">
                <a href="/posts/{{$post->id}}"> <h2 class="blog-post-title">{{$post->title}}</h2></a> 
                <p class="blog-post-meta"> {{$post->created_at}} by <a href="/users/{{$post->user->id}}">{{$post->user->name}}</a></p>
                <p>Tags:
                @foreach($post->tags as $tag)
                    <a href="/posts/tags/{{$tag->name}}">{{$tag->name}}</a>  
                @endforeach 
                </p>

                <p>{{$post->body}}</p>
            </div><!-- /.blog-post -->

        @endforeach
                <nav class="blog-pagination">
                <a class ="btn btn-outline-{{$posts->currentPage() == 1 ? 'secondary disabled': 'primary' }}" href="{{$posts->previousPageUrl()}}">Previous</a>
                    <a class ="btn btn-outline-{{$posts->hasMorePages() ? 'primary' : 'secondary disabled' }}" href="{{$posts->nextPageUrl()}}">Next</a>
                </nav> 

                Page {{$posts->currentPage()}} of {{$posts->lastPage()}}

            

    @endsection