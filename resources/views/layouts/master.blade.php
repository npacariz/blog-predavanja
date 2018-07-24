<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>My Blog</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/blog.css">
  </head>

  <body>

    <div class="blog-masthead">
      <div class="container">
        <nav class="nav blog-nav">
          <a class="nav-link" href="/posts">Home</a>
          

          @if(auth()->check())
              <a class="nav-link" href="/posts/create">Create post</a>
              <a class="nav-link ml-auto" href="#">{{auth()->user()->name}}</a>
              <a class="nav-link " href="/logout">Logout</a>
          @else
              <a class="nav-link ml-auto" href="/login">Login</a>
              <a class="nav-link " href="/register">Register</a>
          @endif
        </nav>
      </div>
    </div>

    @include("partials.header")


    <div class="container">

      <div class="row">

        <div class="col-sm-8 blog-main">


            @yield("content")

          
        </div><!-- /.blog-main -->

        <div class="col-sm-3 offset-sm-1 blog-sidebar">
          <div class="sidebar-module sidebar-module-inset">
        
          <div class="sidebar-module">
            <h4>Tags:</h4>
            <ol class="list-unstyled">
              @foreach($tags as $tag)
              <li>
                <a href="/posts/tags/{{$tag->name}}">{{$tag->name}}</a>
              </li>
              @endforeach
            </ol>
          </div>
        </div><!-- /.blog-sidebar -->

      </div><!-- /.row -->


   @include('partials.footer')

  </body>
</html>
