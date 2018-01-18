<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\Mail\ContactFormEmail;
use App\User;

class UserController extends Controller
{
    public function index()
    {
      return view("login");
    }

    public function login(Request $request)
    {

      $logindata = [
          'email'     => request('email'),
          'password'  => request('password')
        ];

        if (Auth::attempt($logindata)) {
          $request->session()->flash('success', 'You have successfully logged in! '.$request->email);
            return view('contact-form');
        } else {
            return redirect()->back()->with('failure-login', 'You have entered incorrect logins, please try again!');
        }
    }

    public function sendEmail(Request $request)
    {

      $contact = [];

      $contact['senderName'] = $request->get('senderName');
      $contact['senderEmail'] = $request->get('senderEmail');
      $contact['message'] = $request->get('message');

      \Mail::send(new ContactFormEmail($contact));

      return redirect('login')->with('successSending', 'You have successfully email to us!');

    }

    public function store(Request $request)
    {

      $registerdata = User::create([
          'name' => $request['name'],
          'email' => $request['email'],
          'password' => bcrypt($request['password']),
      ]);

      if ($registerdata) {
        return redirect('contact')->with('success-register', 'You have successfully registered! '.$request->name);;
      }

    }

}
