<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Notes - {{ $note->title }}</title>
</head>
<body>
    <nav>
        <a href="{{ url('/dashboard') }}">Dashboard</a>
        @if (auth()->user()->role_id == 4)
            <a href="{{ route('secretary.instructor.index', ['date' => now()->toDateString(), 'user' => auth()->user()->id]) }}">Attendance</a>
        @elseif (auth()->user()->role_id == 5)
            <a href="{{ route('attendance', ['date' => now()->toDateString()]) }}">Attendance</a>
        @endif
        <a href="{{ route('notes.index') }}">Notes</a>
        <a href="{{ ('tasks') }}">Tasks</a>
        <a href="{{ route('events') }}">Events</a>
        <a href="{{ ('calendar') }}">Calendar</a>
    </nav>
    <div class="container">
        <h1>{{ $note->title }}</h1>
        <p class="text-muted">Created: {{ $note->created_at->format('F d, Y') }}</p>
        <p>{{ $note->content }}</p>

        <a href="{{ route('notes.edit', $note) }}" class="btn btn-sm btn-outline-secondary">Edit</a>
        <a href="{{ route('notes.index') }}" class="btn btn-sm btn-outline-primary">Back to Notes</a>
    </div>
</body>
</html>