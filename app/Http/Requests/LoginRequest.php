<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class LoginRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'email' => 'required|email:dns|exists:users,email',
            'password' => 'required|min:6',
        ];
    }

    public function messages(): array
    {
        return [
            'email.required' => "Email wajib diisi !",
            'email.exists' => "Email tidak ada atau belum terdaftar",
            'email.email' => "Format email tidak valid, silahkan gunakan format email yang valid seperti @gmail, @yahoo, dll",
            'password.required' => "Password wajib diisi",
            'password.min' => 'Password harus berisi minimal 6 karakter',
        ];
    }

    public function withValidator($validator)
    {
        $validator->after(function ($validator) {
            // hanya lanjut jika tidak ada error di email
            if (!$validator->errors()->has('email')) {
                $user = User::where('email', $this->email)->first();
                if (!$user || !Hash::check($this->password, $user->password)) {
                    $validator->errors()->add('password', 'Password salah');
                }
            }
        });
    }
}