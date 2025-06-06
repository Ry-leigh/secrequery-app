@extends('layouts.main')

@section('title', 'Attendance')
    
@section('content')
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
@endsection 