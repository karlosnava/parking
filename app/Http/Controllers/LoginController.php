<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

// MODELS
use App\Models\User;

class LoginController extends Controller
{
	public function index()
	{
		if (Auth::check()) {
			return redirect()->route('cars.index');
		}
		return view('login');
	}

	public function login(Request $request)
	{
		$credentials = $request->validate([
			'email' => ['required', 'email', 'string', 'min:5'],
			'password' => ['required', 'string', 'min:8'],
		]);

		$user = User::where('email', $credentials['email'])->first();

		if ($user) {
			if (Auth::attempt($credentials)) {
				$request->session()->regenerate();
		      
		    return redirect()->intended('admin');
			}

			throw ValidationException::withMessages([
	    	'password' => __('auth.password')
	    ]);
		}
		else{
			throw ValidationException::withMessages([
	    	'email' => __('auth.failed')
	    ]);
		}
	}

	public function logout(Request $request)
  {
  	Auth::logout();
  	$request->session()->invalidate();
  	$request->session()->regenerateToken();

  	return redirect('/');
  }
}
