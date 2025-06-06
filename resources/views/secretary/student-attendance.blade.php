@extends('layouts.main')

@section('title', 'Attendance')
    
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

    .student-entry {
        display: flex;
        justify-content: space-between;
        align-items: center;
        border-top: 1px solid #eee;
        padding: 8px 0;
    }

    .student-entry:first-child {
        border-top: none;
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
</style>

<div class="container">
    <!-- Page Info -->
    <div class="card">
        <div class="section-title">Attendance</div>
        <div class="subtitle"></div>
        <div><strong>{{ \Carbon\Carbon::parse($date)->format('l') }} | </strong> {{ \Carbon\Carbon::parse($date)->format('F j, Y') }}</div>
    </div>

    <!-- Instructor Details -->
    <div class="card">
        @php
            $attendance = $instructorAttendance->firstWhere('schedule_id', $schedule->id);
        @endphp

        <div><strong>Schedule:</strong> {{ $schedule->starts_at }} - {{ $schedule->ends_at }}</div>
        <div><strong>Course:</strong> {{ $schedule->course->course }}</div>
        <div>
            <strong>Instructor:</strong>
            @if ($schedule->instructor->gender == 'Male')
                Mr.
            @elseif ($schedule->instructor->gender == 'Female')
                Ms.
            @else
                Teacher
            @endif
            {{ $schedule->instructor->user->first_name }} {{ $schedule->instructor->user->middle_name }} {{ $schedule->instructor->user->last_name }}
        </div>

        <!-- Time In/Out -->
        <div class="grid-2" style="margin-top: 15px;">
            <!-- Time In -->
            <form action="{{ route('secretary.instructor.timeIn', ['date' => $date, 'schedule' => $schedule->id]) }}" method="POST" class="form-inline">
                @csrf
                <label for="time_in">Time In:</label>
                <input type="time" name="time_in" id="time_in" onchange="this.form.submit()" value="{{ $attendance->time_in ?? '' }}">
            </form>
            <form action="{{ route('secretary.instructor.timeIn', ['date' => $date, 'schedule' => $schedule->id]) }}" method="POST">
                @csrf
                <input type="hidden" name="default_time_in" value="{{ now()->format('H:i:s') }}">
                <button type="submit">Quick Log In</button>
            </form>

            <!-- Time Out -->
            <form action="{{ route('secretary.instructor.timeOut', ['date' => $date, 'schedule' => $schedule->id]) }}" method="POST" class="form-inline">
                @csrf
                <label for="time_out">Time Out:</label>
                <input type="time" name="time_out" id="time_out" onchange="this.form.submit()" value="{{ $attendance->time_out ?? '' }}">
            </form>
            <form action="{{ route('secretary.instructor.timeOut', ['date' => $date, 'schedule' => $schedule->id]) }}" method="POST">
                @csrf
                <input type="hidden" name="default_time_out" value="{{ now()->format('H:i:s') }}">
                <button type="submit">Quick Log Out</button>
            </form>
        </div>
    </div>

    <!-- Student Attendance -->
    <div class="card">
        <div class="section-title">Student Attendance</div>
        @foreach ($allStudents as $student)
            @php
                $attendance = $attendanceRecords[$student->id] ?? null;
                $selected = $attendance->attendance_status_id ?? '';
            @endphp
            <div class="student-entry">
                <div>
                    {{ $student->user->last_name }}, {{ $student->user->first_name }} {{ substr($student->user->middle_name, 0, 1) }}.
                </div>
                <div>
                    <select onchange="updateAttendance(this, {{ $student->id }})">
                        <option value="">-- Select Status --</option>
                        <option value="1" {{ $selected == 1 ? 'selected' : '' }}>Present</option>
                        <option value="2" {{ $selected == 2 ? 'selected' : '' }}>Late</option>
                        <option value="3" {{ $selected == 3 ? 'selected' : '' }}>Absent</option>
                        <option value="4" {{ $selected == 4 ? 'selected' : '' }}>Excused</option>
                        <option value="5" {{ $selected == 5 ? 'selected' : '' }}>Suspended</option>
                    </select>
                </div>
            </div>
        @endforeach
    </div>
</div>

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
@endsection 