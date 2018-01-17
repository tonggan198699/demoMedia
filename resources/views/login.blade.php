@extends('layouts.app')


  @section('content')

  <h1>Login Page</h1>

    <form method="POST" action="/login">
    {{ csrf_field() }}

        <div class="form-group">
            <div class="col-md-6">
                <input id="email" type="email" class="form-control" name="email" required autofocus>
                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-6">
              <input id="password" type="password" class="form-control" name="password" required>
              @if ($errors->has('password'))
                  <span class="help-block">
                      <strong>{{ $errors->first('password') }}</strong>
                  </span>
              @endif
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-8 col-md-offset-4">
                <button type="submit" class="btn btn-primary">
                    Login
                </button>
            </div>
        </div>

    </form>

  @endsection
