<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My Todo List</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="register-container">
        <h2>Daftar Akunmu Disini</h2>

        @if ($errors->any())
            <div class="error">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('register') }}">
            @csrf


            <div class="form-group">
                <label for="username">Username<span class="required">*</span></label>
                <input type="username" id="username" name="username" placeholder="username" required>
            </div>

            <div class="form-group">
                <label for="email">Email<span class="required">*</span></label>
                <input type="email" id="email" name="email" placeholder="email" required autofocus>
            </div>

            <div class="form-group">
                <label for="password">Kata Sandi<span class="required">*</span></label>
                <input type="password" id="password" name="password" placeholder="password minimal 6 karakter" required>
            </div>

            <div class="form-group">
                <button type="submit">Mendaftar</button>
            </div>
        </form>
        <div>
        <p>Sudah punya akun?? <a href="{{ route('login') }}" class="redirect-button">Login</a></p>
    </div>
    </div>   
</body>
</html>
