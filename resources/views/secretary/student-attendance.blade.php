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
        <a href="{{ ('notes') }}">Notes</a>
        <a href="{{ ('tasks') }}">Tasks</a>
        <a href="{{ route('events') }}">Events</a>
        <a href="{{ ('calendar') }}">Calendar</a>
    </nav>  
    <h1>Attendance</h1>
    <h3>{{ \Carbon\Carbon::parse($date)->format('l') }}</h3>
    <p>{{ \Carbon\Carbon::parse($date)->format('F j, Y') }}</p>
    <div>
        @php
            $attendance = $instructorAttendance->firstWhere('schedule_id', $schedule->id);
        @endphp
        {{-- course start to end --}}
        {{ $schedule->starts_at }} - {{ $schedule->ends_at }} <br>
        {{-- Link to take student/class attendance --}}   
        {{ $schedule->course->course }} <br>
        @if ($schedule->instructor->gender == 'Male')
            Mr.
        @elseif ($schedule->instructor->gender == 'Female')
            Ms.
        @else
            Teacher
        @endif
        {{ $schedule->instructor->user->first_name }} {{ $schedule->instructor->user->middle_name }} {{ $schedule->instructor->user->last_name }} <br>

        {{-- Time In Form --}}
        <form action="{{ route('secretary.instructor.timeIn', ['date' => $date, 'schedule' => $schedule->id]) }}" method="POST">
            @csrf
            <label for="time_in">Time In:</label>
            <input type="time" name="time_in" id="time_in" onchange="this.form.submit()" value="{{ $attendance->time_in ?? '--:--:--' }}">
        </form>
        {{-- Auto Time in Form --}}
        <form action="{{ route('secretary.instructor.timeIn', ['date' => $date, 'schedule' => $schedule->id]) }}" method="POST">
            @csrf
            <input type="hidden" name="default_time_in" value="{{ now()->format('H:i:s') }}">
            <button type="submit">Quick Log</button>
        </form>

        {{-- Time Out Form --}}
        <form action="{{ route('secretary.instructor.timeOut', ['date' => $date, 'schedule' => $schedule->id]) }}" method="POST">
            @csrf
            <label for="time_out">Time Out:</label>
            <input type="time" name="time_out" id="time_out" onchange="this.form.submit()" value="{{ $attendance->time_out ?? '--:--:--' }}">
        </form>
        {{-- Auto Time Out Form --}}
        <form action="{{ route('secretary.instructor.timeOut', ['date' => $date, 'schedule' => $schedule->id]) }}" method="POST">
            @csrf
            <input type="hidden" name="default_time_out" value="{{ now()->format('H:i:s') }}">
            <button type="submit">Quick Log</button>
        </form>
        <br><br>
    </div>
    <div>
        @foreach ($allStudents as $student)
            @php
                $attendance = $attendanceRecords[$student->id] ?? null;
                $selected = $attendance->attendance_status_id ?? '';
            @endphp

            {{ $student->user->last_name }}, {{ $student->user->first_name }} {{ substr($student->user->middle_name, 0, 1) }}. 

            <select onchange="updateAttendance(this, {{ $student->id }})">
                <option value="">-- Select Status --</option>
                <option value="1" {{ $selected == 1 ? 'selected' : '' }}>Present</option>
                <option value="2" {{ $selected == 2 ? 'selected' : '' }}>Late</option>
                <option value="3" {{ $selected == 3 ? 'selected' : '' }}>Absent</option>
                <option value="4" {{ $selected == 4 ? 'selected' : '' }}>Excused</option>
                <option value="5" {{ $selected == 5 ? 'selected' : '' }}>Suspended</option>
            </select>
            <br>
        @endforeach
    </div>
</body>
</html>

<script>
    function updateAttendance(selectElement, studentId) {
        const status = selectElement.value;
        const scheduleId = {{ $schedule->id }};
        const date = '{{ $date }}';

        fetch("{{ route('secretary.attendance.register') }}", {
            method: "POST",
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            body: JSON.stringify({
                student_id: studentId,
                schedule_id: scheduleId,
                date: date,
                attendance_status_id: status
            })
        })
        .then(response => response.ok ? console.log("Updated") : console.error("Failed"))
        .catch(error => console.error("Error:", error));
    }
</script>
