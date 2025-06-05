<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Notes</title>
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
        <h1>Notes</h1>
        <a href="{{ route('notes.create') }}" class="btn btn-primary mb-3">+ Add Note</a>

        @foreach ($notes as $note)
            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title">{{ $note->title }}</h5>
                    <p class="card-text">{{ \Str::limit($note->content, 150) }}</p>
                    <a href="{{ route('notes.show', $note) }}" class="btn btn-sm btn-outline-primary">View</a>
                    <a href="{{ route('notes.edit', $note) }}" class="btn btn-sm btn-outline-secondary">Edit</a>
                    <form action="{{ route('notes.destroy', $note) }}" method="POST" class="d-inline" onsubmit="return confirm('Delete this note?')">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-sm btn-outline-danger">Delete</button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>
</body>
</html>