@extends('app')


  @section('content')

  <h1>Login Page</h1>

    <form method="POST" action="/login">
    {{ csrf_field() }}

        <div class="form-row">

            <div class="form-group col-md-4">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Enter a value email address">

                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group col-md-3">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password">

                @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>

        </div>

        <div class="form-group row">
            <div class="col-sm-10">
              <button type="submit" class="btn btn-primary">Login</button>
            </div>
        </div>

    </form>

  @endsection
