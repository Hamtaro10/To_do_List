<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

    // Menampilkan Form Login
    public function showLoginForm()
    {
        return view('auth.login');
    }


    // Memproses Login
    public function login(Request $request)
    {
        $inputlogin = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        $remember = $request->has('remember'); //Mengambil Nilai Remember Dari Button Switch Pada Form Login

        if (Auth::attempt($inputlogin, $remember)) {
            $request->session()->regenerate();
            return redirect()->intended('/dashboard')->with('success', 'Selamat datang, ' . Auth::user()->username . '!');;
        
        }

        return back()->withErrors([
            'email' => 'Email atau password salah.',
        ])->onlyInput('email');
    }
}
