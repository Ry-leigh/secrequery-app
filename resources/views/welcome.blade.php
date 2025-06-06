<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SecreQuery</title>
    <style>
        body {
            margin: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #1f3360;
            color: white;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .login-button {
            position: absolute;
            top: 20px;
            right: 40px;
            background-color: #4a90e2;
            color: white;
            border: none;
            padding: 10px 30px;
            border-radius: 999px;
            font-style: italic;
            box-shadow: 0 2px 4px rgba(0,0,0,0.3);
            text-decoration: none;
        }

        .logo {
            width: 200px;
            height: 200px;
            margin-bottom: 20px;
            border: white solid 3px;
            border-radius: 50%;
        }

        .title {
            font-size: 70px;
            font-weight: 500;
        }

        .subtitle {
            font-style: italic;
            font-size: 25px;
            margin-top: 10px;
            color: #cdd6f4;
        }

        header {
            height: 84px;
            width: 100%;
            position: absolute;
            top: 0;
            z-index: -1;
            background-color: aliceblue;
        }
    </style>
</head>
<body>
    <header></header>
    @if (Route::has('login'))
        @auth
            <a href="{{ url('/dashboard') }}" class="login-button">Dashboard</a>
        @else
            <a href="{{ route('login') }}" class="login-button">Log in</a>
        @endauth
    @endif

    <img src="{{ asset('images/duck-logo.png') }}" alt="SecreQuery Logo" class="logo">
    <div class="title"><strong>SecreQuery</strong></div>
    <div class="subtitle">"Take notes, take charge"</div>

    <footer></footer>
</body>
</html>
