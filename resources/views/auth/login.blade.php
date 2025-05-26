<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Secrequery - Login</title>
</head>
<body>
    @if (session('status'))
        <div style="color: green;">
            {{ session('status') }}
        </div>
    @endif

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <label for="email">Email</label>
        <br>
        <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus>
        @error('email')
            <p style="color: red;">{{ $message }}</p>
        @enderror
        <br>

        <label for="password">Password</label>
        <br>
        <input id="password" type="password" name="password" required>
        @error('password')
            <p style="color: red;">{{ $message }}</p>
        @enderror
        <br>

        <label>
            <input type="checkbox" name="remember">
            Remember me
            <br>
        </label>

        @if (Route::has('password.request'))
            <a href="{{ route('password.request') }}">Forgot your password?</a>
        @endif

        <button type="submit" style="margin-left: 1rem;">Log in</button>
    </form>
</body>
</html>