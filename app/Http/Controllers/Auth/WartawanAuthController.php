<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WartawanAuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.wartawan-login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::guard('wartawan')->attempt($credentials)) {
            return redirect()->intended('/wartawan/berita');
        }

        return back()->withErrors(['email' => 'Login gagal']);
    }
}

