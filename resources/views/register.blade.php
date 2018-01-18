@extends('app')


  @section('content')

  <h1>Registration Page</h1>

  <form method="POST" action="/store" id="registration-form">
  {{ csrf_field() }}

    <div class="row">
        <div class="form-group col-md-4">
            <label for="name">Name</label>
            <input type="name" class="form-control" name="name" placeholder="Enter your name here">

            @if ($errors->has('name'))
                <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
            @endif
        </div>

        <div class="form-group col-md-4">
            <label for="email">Email</label>
            <input type="email" class="form-control" name="email" placeholder="Enter a value email address">

            @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="row">
        <div class="form-group col-md-4">
            <label for="password">Password</label>
            <input type="password" class="form-control" name="password" id="password" placeholder="Enter your password">

            @if ($errors->has('password'))
                <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
        </div>

        <div class="form-group col-md-4">
            <label for="password_confirmation">Confirm Password</label>
            <input type="password" class="form-control" name="password_confirmation" placeholder="Enter your password">

            @if ($errors->has('password_confirmation'))
                <span class="help-block">
                    <strong>{{ $errors->first('password_confirmation') }}</strong>
                </span>
            @endif            
        </div>
    </div>

      <button type="submit" class="btn btn-primary">Register</button>
      <a href="/login" class="btn btn-link">To log in</a>

  </form>

  @endsection
