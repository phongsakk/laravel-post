<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function loginPost(Request $request)
    {
        $credentials['email'] = $request->get('email');
        $credentials['password'] = $request->get('password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            if (auth()->user()->level === 1 ){
                return redirect()->route('dashboard');
            }else {
                return redirect()->route('site');
            }
        }
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    public function register()
    {
    }

    public function registerPost()
    {
    }
}
