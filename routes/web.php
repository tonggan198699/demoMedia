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

Route::get('/', function () {
    return view('welcome');
});

// route for showing the login page
Route::get('/login', 'UserController@index');

// route for post request to login
Route::post('/login', 'UserController@login');

// route for post request to send email
Route::post('/sendEmail', 'UserController@sendEmail');
