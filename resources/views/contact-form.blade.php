@extends('app')

<div class="container">

  @if(session()->has('success'))
  <div class="alert alert-success">
      {{ session()->get('success') }}
  </div>
  @endif

  <h1>Contact Form</h1>

</div>
