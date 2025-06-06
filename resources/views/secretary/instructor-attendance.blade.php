@extends('layouts.main')

@section('title', 'Attendance')
@include('partials.calendar')

@section('content')
<style>
    .container {
        max-width: 900px;
        margin: 20px auto;
        padding: 20px;
        font-family: Arial, sans-serif;
    }

    .card {
        background: #fff;
        border: 1px solid #ddd;
        border-radius: 8px;
        padding: 20px;
        margin-bottom: 20px;
        box-shadow: 0 2px 4px rgba(0,0,0,0.05);
    }

    .section-title {
        font-size: 24px;
        font-weight: bold;
        margin-bottom: 5px;
    }

    .subtitle {
        color: #666;
        margin-bottom: 10px;
    }

    label {
        font-weight: bold;
    }

    input[type="time"] {
        padding: 5px;
        border-radius: 4px;
        border: 1px solid #ccc;
    }

    button {
        padding: 6px 12px;
        background-color: #007bff;
        color: white;
        border: none;
        border-radius: 4px;
        margin-top: 4px;
        cursor: pointer;
    }

    button:hover {
        background-color: #0056b3;
    }

    select {
        padding: 4px 8px;
        border-radius: 4px;
        border: 1px solid #ccc;
        margin-left: 10px;
    }

    .form-inline {
        display: flex;
        align-items: center;
        gap: 10px;
        margin-bottom: 10px;
    }

    .grid-2 {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 10px;
    }

    a {
        color: #333;
        text-decoration: none;
        font-weight: 500;
        display: inline-block;
        margin-top: 5px;
        margin-bottom: 10px;
    }

    a:hover {
        text-decoration: underline;
    }
</style>


<div class="container">
    <div class="card">
        <div class="section-title">Attendance</div>
        <div class="subtitle"></div>
        <div><strong>{{ \Carbon\Carbon::parse($date)->format('l') }} | </strong> {{ \Carbon\Carbon::parse($date)->format('F j, Y') }}</div>
    </div>

    @foreach ($schedules as $schedule)
        @php
            $attendance = $instructorAttendance->firstWhere('schedule_id', $schedule->id);
        @endphp
        <div class="card">
            <!-- Schedule Info -->
            <div><strong>Time:</strong> {{ $schedule->starts_at }} - {{ $schedule->ends_at }}</div>

            <!-- Instructor and Course -->
            <a href="{{ route('secretary.attendance.index', ['date' => $date, 'schedule' => $schedule->id ]) }}">
                <strong>Course:</strong> {{ $schedule->course->course }} <br>
                <strong>Instructor:</strong>
                @if ($schedule->instructor->gender == 'Male')
                    Mr.
                @elseif ($schedule->instructor->gender == 'Female')
                    Ms.
                @else
                    Teacher
                @endif
                {{ $schedule->instructor->user->first_name }}
                {{ $schedule->instructor->user->middle_name }}
                {{ $schedule->instructor->user->last_name }}
            </a>

            <!-- Time In/Out Forms -->
            <div class="grid-2" style="margin-top: 15px;">
                <!-- Time In -->
                <form action="{{ route('secretary.instructor.timeIn', ['date' => $date, 'schedule' => $schedule->id]) }}" method="POST" class="form-inline">
                    @csrf
                    <label for="time_in_{{ $schedule->id }}">Time In:</label>
                    <input type="time" name="time_in" id="time_in_{{ $schedule->id }}" onchange="this.form.submit()" value="{{ $attendance->time_in ?? '' }}">
                </form>
                <form action="{{ route('secretary.instructor.timeIn', ['date' => $date, 'schedule' => $schedule->id]) }}" method="POST">
                    @csrf
                    <input type="hidden" name="default_time_in" value="{{ now()->format('H:i:s') }}">
                    <button type="submit">Quick Log In</button>
                </form>

                <!-- Time Out -->
                <form action="{{ route('secretary.instructor.timeOut', ['date' => $date, 'schedule' => $schedule->id]) }}" method="POST" class="form-inline">
                    @csrf
                    <label for="time_out_{{ $schedule->id }}">Time Out:</label>
                    <input type="time" name="time_out" id="time_out_{{ $schedule->id }}" onchange="this.form.submit()" value="{{ $attendance->time_out ?? '' }}">
                </form>
                <form action="{{ route('secretary.instructor.timeOut', ['date' => $date, 'schedule' => $schedule->id]) }}" method="POST">
                    @csrf
                    <input type="hidden" name="default_time_out" value="{{ now()->format('H:i:s') }}">
                    <button type="submit">Quick Log Out</button>
                </form>
            </div>
        </div>
    @endforeach
</div>
@endsection
