<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SecreQuery - Login</title>
    <style>
        body {
            margin: 0;
            background: #67c5e3;
            background-image: url("{{ asset('images/login-bg.jpg') }}");
            font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .login-container {
            display: flex;
            flex-direction: column;
            align-content: center;
            background: #fff;
            border-radius: 16px;
            width: 420px; /* Wider container */
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
            overflow: hidden;
        }

        .login-header {
            justify-self: center;
            text-align: center;
            width: 87%;
            background-color: #203A72;
            color: white;
            padding: 20px 28px;
            font-size: 1.3rem;
        }

        .login-header strong {
            font-weight: 700;
            font-size: 2rem;
            margin-right: 10px;
        }

        .login-body {
            padding: 28px;
        }

        .input-field {
            width: 90%;
            padding: 14px 18px;
            margin-bottom: 18px;
            border: 1px solid #ccc;
            border-radius: 24px;
            font-size: 1rem;
            font-style: italic;
            outline: none;
            transition: border-color 0.2s;
        }

        .input-field:focus {
            border-color: #3b82f6;
        }

        .btn-submit {
            background-color: #3b82f6;
            border: none;
            color: white;
            padding: 14px;
            width: 100%;
            border-radius: 24px;
            font-style: italic;
            font-size: 1rem;
            cursor: pointer;
            margin-bottom: 14px;
        }

        .form-options {
            font-size: 0.9rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .form-options a {
            color: #3b82f6;
            text-decoration: none;
        }

        .form-footer {
            text-align: center;
            font-size: 0.9rem;
            margin-top: 20px;
        }

        .form-footer a {
            color: #3b82f6;
            text-decoration: none;
        }

        .error-message {
            color: red;
            font-size: 0.85rem;
            margin-top: -10px;
            margin-bottom: 10px;
        }

        .status-message {
            color: green;
            font-size: 0.9rem;
            text-align: center;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="login-header">
            <strong>Log in |</strong> Welcome quack!
        </div>

        <div class="login-body">
            @if (session('status'))
                <div class="status-message">{{ session('status') }}</div>
            @endif

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <input type="email" name="email" class="input-field" placeholder="Username or email" value="{{ old('email') }}" required autofocus>
                @error('email')
                    <div class="error-message">{{ $message }}</div>
                @enderror

                <input type="password" name="password" class="input-field" placeholder="Password" required>
                @error('password')
                    <div class="error-message">{{ $message }}</div>
                @enderror

                <button type="submit" class="btn-submit">Log in</button>

                <div class="form-options">
                    <label><input type="checkbox" name="remember"> Remember me</label>
                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}">Forgot password?</a>
                    @endif
                </div>

                <div class="form-footer">
                    Don't have an account?
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}">Sign up</a>
                    @endif
                </div>
            </form>
        </div>
    </div>
</body>
</html>
