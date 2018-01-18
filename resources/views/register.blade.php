@extends('app')


  @section('content')

  <h1>Registration Page</h1>

  <form method="POST" action="/store">
  {{ csrf_field() }}

    <div class="row">
        <div class="form-group col-md-4">
            <label for="name">First Name</label>
            <input type="name" class="form-control" name="name" placeholder="Enter your first name here" required>

            @if ($errors->has('name'))
                <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
            @endif
        </div>

        <div class="form-group col-md-4">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Enter a value email address" required>

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
            <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" required>

            @if ($errors->has('password'))
                <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
        </div>

        <div class="form-group col-md-4">
            <label for="password-confirm">Confirm Password</label>
            <input type="password" class="form-control" name="password_confirmation" placeholder="Enter your password" required>
        </div>
    </div>

      <button type="submit" class="btn btn-primary">Register</button>
      <a href="/login" class="btn btn-link">To log in</a>

  </form>

  @endsection
