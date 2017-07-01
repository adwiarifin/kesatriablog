<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class RegistrationController extends Controller
{
    public function __construct() {
    	$this->middleware('guest');
    }

    public function create() {
    	return view('registration.create');
    }

    public function store(Request $request) {
    	$this->validate($request, [
    		'firstname' => 'required|string|max:255',
    		'lastname' => 'required|string|max:255',
    		'email' => 'required|string|email|max:255|unique:users',
    		'password' => 'required|string|min:8|confirmed',
		]);

		$user = new User();
		$user->firstname = $request->firstname;
		$user->lastname = $request->lastname;
		$user->email = $request->email;
		$user->password = bcrypt($request->password);
		$user->save();

		\Mail::to($user)->send(new \App\Mail\Welcome($user));

		return redirect('/thanks');
    }
}
