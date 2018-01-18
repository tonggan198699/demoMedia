<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route to redirect to login page by default
Route::get('/', function () {
    return redirect('login');
});

// route for showing the login page
Route::get('/login', 'UserController@index');

// route for post request to login
Route::post('/login', 'UserController@login');

// route for post request to send email
Route::post('/sendEmail', 'UserController@sendEmail');

// Route to show the registration page
Route::get('/register', function () {
    return view('register');
});

// Route to post request to register
Route::post('/store', 'UserController@store');

// route for showing the contact page
Route::get('/contact',  function () {
    return view('contact-form');
});
