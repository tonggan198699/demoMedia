@extends('app')

<div class="container">

  @if(session()->has('success'))
  <div class="alert alert-success">
      {{ session()->get('success') }}
  </div>
  @endif

  @if(session()->has('success-register'))
  <div class="alert alert-success">
      {{ session()->get('success-register') }}
  </div>
  @endif


  <h1>Contact Form</h1>

    <div class="col-md-6">

        <form class="emailForm" method="POST" action="/sendEmail" id="contact-form">
          {!! csrf_field() !!}

          <div class="form-group">
              <input type="text" class="form-control" name="senderName" placeholder="Enter your name">
          </div>

          <div class="form-group">
            <input type="text" class="form-control" name="senderEmail" placeholder="Enter your email address">
          </div>

          <div class="form-group">
            <textarea type="text" class="form-control" name="message" required="required" rows="3"></textarea>
          </div>

          <a class="btn btn-info" href="/login">Back</a>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>

</div>
