<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Support\Facades\Auth;
use App\Http\Requests\LoginRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use App\Models\User;

class AuthController extends Controller
{
    public function showLoginForm(){
        return view('auth.form', ['mode' => 'login']);
    }

    public function login(LoginRequest $request){

        $credentials = $request -> validated();

        if(Auth::attempt($credentials)){
            session()->regenerate();
            return redirect()->intended('/home')->with('Sukses', 'Berhasil Login, Selamat Datang !');
        }

    }

    public function logout(Request $request){
        
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }

    public function showRegisterForm(){
        return view('auth.form', ['mode' => 'register']);
    }


    // Untuk pemrosesan Register

    public function register(RegisterRequest $request){

        $validated = $request ->validated();
            
        // Menyimpan data yang telah didaftarkan kedalam database
        User::create([
            'username' => $validated['username'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password'])

        ]);

        return redirect()->route('login')->with('Sukses', 'Akun anda berhasil dibuat!');
    }
}
