@extends("layouts.master")
   @section('content')
  

   <form action="/login" method="POST">

    {{csrf_field()}}
  

    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="email" name='email' required>
          @include('partials.errors-message', ['fieldName' =>  'email'])
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" id="password" name='password' required>
          @include('partials.errors-message', ['fieldName' =>  'password'])
    </div>
          @include('partials.errors-message', ['fieldName' =>  'message'])
    <button type="submit" class="btn btn-primary">Login</button>
   
  </form>

    @endsection