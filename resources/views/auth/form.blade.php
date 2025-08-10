@extends('layouts.auth')

@section('title', 'My Web')

@section('authentication')
<div class="form-container">
    @if ($mode == 'login')
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <h1>Login</h1>
            
            <label for="email">Email</label>
            <input type="email" name="email" id="email" placeholder="Masukkan email" required>
            
            <label for="password">Password</label>
            <input type="password" name="password" id="password" placeholder="Masukkan password disini" required>
            
            <label class="switching">
                <input type="checkbox" name="remember">
                <span>Remember Me</span>
            </label>
            
            <button type="submit">Login</button>
            <p>Belum punya akun? <a href="/register">Sign up</a></p>
        </form>

    @elseif ($mode == 'register')
        <form action="{{ route('register') }}" method="POST">
            @csrf
            <h1>Register</h1>

            @if ($errors->any())
                <div class="error-box">
                    <ol>
                        @foreach ($errors->all() as $error)
                            <li>{{ "*$error" }}</li>
                        @endforeach
                    </ol>
                </div>
            @endif

            <label for="username">Username</label>
            <input type="text" name="username" id="username" placeholder="Minimal 5 karakter" required>
            
            <label for="email">Email</label>
            <input type="email" name="email" id="email" placeholder="Silahkan masukan email anda" required>
            
            <label for="password">Password</label>
            <input type="password" name="password" id="password" placeholder="Password minimal 6 karakter" required>
            
            <button type="submit">Register</button>
            <p>Sudah punya akun? <a href="/login">Login</a></p>
        </form>
    @endif
</div>
@endsection
