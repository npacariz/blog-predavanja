@extends("layouts.master")
   @section('content')
  

   <form action="/posts" method="POST">

    {{csrf_field()}}
  
    <div class="form-group">
      <label for="title">Title</label>
      <input name='title' type="text" class="form-control" id="title">
        @include('partials.errors-message', ['fieldName' =>  'title'])
    </div>
    <div class="form-group">
      <label for="body">Body</label>
      <textarea name='body' type="text" class="form-control" id="body"></textarea>
      @include('partials.errors-message', ['fieldName' =>  'body'])

    </div>
    


    <div class="form-group form-check">
        <input name='published' value="1"  type="checkbox" class="form-check-input" checked>
        <label class="form-check-label" for="published">Publish</label>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

    @endsection