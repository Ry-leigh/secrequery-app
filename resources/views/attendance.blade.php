<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Attendance</title>
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

    <h1>Attendance</h1>
    <h3>{{ \Carbon\Carbon::parse($date)->format('l') }}</h3>
    <p>{{ \Carbon\Carbon::parse($date)->format('F j, Y') }}</p>
    @foreach ($schedules as $schedule)
        @php
            $attendance = $studentAttendanceRecords->firstWhere('schedule_id', $schedule->id);
        @endphp
        Status: {{ $attendance->attendance_status?->attendance_status ?? 'TBD' }}
        <br>
        {{-- course start to end --}}
        {{ $schedule->starts_at }} - {{ $schedule->ends_at }}
        <br>
        {{-- Link to take student/class attendance --}}
        {{ $schedule->course->course }}
        <br>
        @if ($schedule->instructor->gender == 'Male')
            Mr.
        @elseif ($schedule->instructor->gender == 'Female')
            Ms.
        @else
            Teacher
        @endif
        {{ $schedule->instructor->user->first_name }} {{ $schedule->instructor->user->middle_name }} {{ $schedule->instructor->user->last_name }}
        <br>
        <br>
    @endforeach
</body>
</html>