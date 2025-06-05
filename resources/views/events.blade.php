<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Events</title>
</head>
<body>
    <nav>
        <a href="{{ url('/dashboard') }}">Dashboard</a>
        @if (auth()->user()->role_id == 4)
            <a href="{{ route('secretary.instructor.index', ['date' => now()->toDateString(), 'user' => auth()->user()->id]) }}">Attendance</a>
        @elseif (auth()->user()->role_id == 5)
            <a href="{{ route('attendance', ['date' => now()->toDateString()]) }}">Attendance</a>
        @endif
        <a href="{{ ('notes') }}">Notes</a>
        <a href="{{ ('tasks') }}">Tasks</a>
        <a href="{{ route('events') }}">Events</a>
        <a href="{{ ('calendar') }}">Calendar</a>
    </nav>
    <h1>Events</h1>
    @foreach ($groupedEvents as $month => $events)
        <h2 class="text-xl font-bold mt-6">{{ $month }}</h2>

        @foreach ($events as $event)
            <div class="ml-4 mb-2">
                <strong>{{ \Carbon\Carbon::parse($event->date)->format('M d') }}: {{ $event->title }}</strong> 
                
                <br>
                {{ $event->content }}
            </div>
        @endforeach
    @endforeach
</body>
</html>