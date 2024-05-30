<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = '/';

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request)
    {
        $input = $request->all();

        $this->validate($request, [
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:8',
        ]);

        $remember = $request->has('remember');

        if (auth()->attempt(['email' => $input['email'], 'password' => $input['password']], $remember)) {
            if (auth()->user()->is_admin == 1) {
                return redirect()->route('dashboard');
            } else {
                return redirect()->route('home');
            }
        } else {
            return redirect()->route('login')->with('error', __('messages.invalid_credentials'));
        }
    }

}

