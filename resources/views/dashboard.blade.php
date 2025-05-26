<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
</head>
<body>
    <h1>Welcome, {{ Auth::user()->first_name }}</h1>

    <a href="{{ route('profile.edit') }}">Edit Profile</a>
    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit">Log Out</button>
    </form>

    <nav>
        <ul>
            <li><a href="{{ url('/dashboard') }}">Dashboard</a></li>
            <li><a href="{{ route('attendance') }}">Attendance</a></li>
            <li><a href="{{ route('notes') }}">Notes</a></li>
            <li><a href="{{ route('tasks') }}">Tasks</a></li>
            <li><a href="{{ route('events') }}">Events</a></li>
            <li><a href="{{ route('calendar') }}">Calendar</a></li>
        </ul>
    </nav>
</body>
</html>