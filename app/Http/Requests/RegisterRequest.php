<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array{
        return [
            'username' => 'required|min:5|max:255|unique:users,username',
            'email' => 'required|email:dns|unique:users,email',
            'password' => 'required|min:6',
        ];
    }

    public function messages(): array{
        return[
            
            'username.required' => 'Username belum diisi !',
            'username.unique' => 'Username telah digunakan, harap gunakan username yang lain',
            'email.required' => "Email wajib diisi !",
            'email.unique' => "Email tidak ada atau belum terdaftar",
            'email.email' => "Format email tidak valid, silahkan gunakan format email yang valid seperti @gmail, @yahoo, dll",
            'password.required' => "Password wajib diisi",
            'password.min' => 'Password harus berisi minimal 6 karakter',
        ];
    }
}
