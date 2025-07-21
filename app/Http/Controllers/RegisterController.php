<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{

    // Unuk menampilkan form register
    public function showRegisterForm(){
        return view('auth.register');
    }


    // Untuk pemrosesan Register

    public function register(Request $request){

        $inputRegister = $request ->validate([

            'username' => ['required', 'max:255'],
            'email' => ['required', 'email', 'unique:users,email'],
            'password' => ['required', 'min:6'],

        ]);
            
        // Menyimpan data yang telah didaftarkan kedalam database
        User::create([
            'username' => $inputRegister['username'],
            'email' => $inputRegister['email'],
            'password' => Hash::make($inputRegister['password'])

        ]);

        return redirect()->route('login')->with('Sukses', 'Akun anda berhasil dibuat!');
    }
}
