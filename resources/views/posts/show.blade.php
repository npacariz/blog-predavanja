@extends("layouts.master")
   @section('content')
  

        <div class="blog-post">
            <h2 class="blog-post-title">{{$posts->title}}</h2>
            <p class="blog-post-meta"> {{$posts->created_at}} by  <a href="/users/{{$posts->user->id}}">{{$posts->user->name}}</a></p>

            <p>{{$posts->body}}</p>
            
          </div><!-- /.blog-post -->

        <div>
            <ul>
                @foreach($posts->comments as $comment)
                    <li>{{$comment->text}}</li>
                @endforeach
            </ul>
        </div>
        
    <form method="POST" action="/post/{{$posts->id}}/comment">
            {{csrf_field()}}

                <div class="form-group">
                  <label for="name">Name</label>
                  <input type="text" class="form-control" id="name" name='name'>
                  @include('partials.errors-message', ['fieldName' =>  'name'])
                </div>
                <div class="form-group">
                  <label for="text">Comment</label>
                  <textarea type="text" class="form-control" id='text' name='text'></textarea>
                  @include('partials.errors-message', ['fieldName' =>  'text'])
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
        </form>



    @endsection