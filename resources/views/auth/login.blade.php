<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My Todo List</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<body>
    <div class="login-container register-container">
        <h2>Login</h2>

        @if ($errors->any())
            <div class="error">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" value="{{ old('email') }}" required autofocus>
            </div>

            <div class="form-group">
                <label for="password">Kata Sandi</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="rememberme">
                <label class="switch">
                <input type="checkbox" name="remember" id="remember">
                <span class="slider"></span>
                </label>
                <label for="remember"><span class="rememberme-toggle">Remember Me</span></label>
            </div>
            <div class="form-group">
                <button type="submit">Masuk</button>
            </div>
        </form>
        <p>Belum punya akun?? <a href="{{ route('register') }}" class="redirect-button">Daftar</a></p>
    </div>

    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
</body>
</html>
