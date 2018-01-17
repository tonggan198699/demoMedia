@extends('app')

<div class="container">

  @if(session()->has('success'))
  <div class="alert alert-success">
      {{ session()->get('success') }}
  </div>
  @endif

  <h1>Contact Form</h1>

    <div class="col-md-6">

        <form class="emailForm" method="POST" action="/sendEmail">
          {!! csrf_field() !!}

          <div class="form-group">
              <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" required>
          </div>

          <div class="form-group">
            <input type="text" class="form-control" id="email" name="email" placeholder="Enter your email address" required>
          </div>

          <div class="form-group">
            <textarea type="text" class="form-control" id="message" name="message" required="required" rows="3" required></textarea>
          </div>

          <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>

</div>
