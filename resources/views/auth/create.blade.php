@extends("layouts.master")
   @section('content')
  

   <form action="/register" method="POST">

    {{csrf_field()}}
  
    <div class="form-group">
      <label for="name">Name</label>
      <input type="text" class="form-control" id="name" name='name' required >
        @include('partials.errors-message', ['fieldName' =>  'name'])
    </div>
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


    <div class="form-group">
        <label for="age">Age</label>
        <input type="number" class="form" id="age" name='age' required>
          @include('partials.errors-message', ['fieldName' =>  'age'])
    </div>


    <button type="submit" class="btn btn-primary">Register</button>
  </form>

    @endsection