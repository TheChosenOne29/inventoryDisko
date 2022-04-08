<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function auth(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required|min:3'
        ]);

        if(Auth::attempt($credentials)){            
            $request->session()->regenerate();
            return redirect('/');
        }

        return redirect()->intended('/login');
    }

    public function logOut()
    {
        Auth::logout();

        return redirect('/login');
    }
}
