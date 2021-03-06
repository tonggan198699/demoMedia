@extends('app')


  @section('content')

  <h1>Login Page</h1>

    <form method="POST" action="/login" id="login-form">
    {{ csrf_field() }}

        <div class="form-row">

            <div class="form-group col-md-4">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email" placeholder="Enter a value email address">

                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group col-md-3">
                <label for="password">Password</label>
                <input type="password" class="form-control" name="password" placeholder="Enter your password">

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
              <a href="/register" class="btn btn-link">No yet register?</a>
            </div>
        </div>

        @if(session()->has('failure-login'))
        <div class="alert alert-danger">
            {{ session()->get('failure-login') }}
        </div>
        @endif

        @if(session()->has('successSending'))
        <div class="alert alert-success">
            {{ session()->get('successSending') }}
        </div>
        @endif

    </form>


  @endsection
