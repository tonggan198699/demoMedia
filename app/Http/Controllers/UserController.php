<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\Mail\ContactFormEmail;

class UserController extends Controller
{
    public function index()
    {
      return view("login");
    }

    public function login(Request $request)
    {
      $this->validate($request, [
          'email' => 'required|string|email|max:255',
          'password' => 'required|string|min:6',
      ]);

      $userdata = [
          'email'     => request('email'),
          'password'  => request('password')
        ];

        if (Auth::attempt($userdata)) {
          $request->session()->flash('success', 'You have successfully logged in!');
            return view('contact-form');
        } else {
            return redirect()->back()->with('failure', 'You have entered incorrect logins, please try again!');
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

}
