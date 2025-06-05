<?php

namespace App\Http\Controllers;

use App\Models\InstructorAttendance;
use App\Models\IrregularStudentCourse;
use App\Models\Schedule;
use App\Models\Student;
use App\Models\StudentAttendance;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudentAttendanceController extends Controller
{
    public function index($date, $schedule)
    {
        $secretary = Student::where('user_id', Auth::id())->first();
        //if no schedule that day return "no {course} on {day}"

        $schedule = Schedule::find($schedule);

        $instructorAttendance = InstructorAttendance::where('date', $date)
                                            ->where('schedule_id', $schedule->id)
                                            ->get();

        $regularStudents = Student::with('user')
                                  ->where('program_id', $secretary->program_id)
                                  ->where('year_level_id', $secretary->year_level_id)
                                  ->where('irregular', false)
                                  ->get();

        $irregularStudentIds = IrregularStudentCourse::where('schedule_id', $schedule->id)
                                                     ->pluck('student_id');

        $irregularStudents = Student::with('user')
                                    ->whereIn('id', $irregularStudentIds)
                                    ->get();

        $allStudents = $regularStudents->merge($irregularStudents)
                                       ->sortBy(function ($student) {return $student->user->last_name ?? '';})
                                       ->values();

        $attendanceRecords = StudentAttendance::where('schedule_id', $schedule->id)
                                              ->where('date', $date)
                                              ->get()
                                              ->keyBy('student_id');

        return view('secretary.student-attendance', compact('date', 'schedule', 'instructorAttendance', 'allStudents', 'attendanceRecords'));
    }

    // public function setStudentStatus(Request $request)
    //     {
    //         $validated = $request->validate([
    //             'student_id' => 'required|exists:students,id',
    //             'schedule_id' => 'required|exists:schedules,id',
    //             'date' => 'required|date',
    //             'attendance_status_id' => 'required|exists:attendance_statuses,id', 
    //         ]);

    //         StudentAttendance::updateOrCreate(
    //             [
    //                 'student_id' => $validated['student_id'],
    //                 'schedule_id' => $validated['schedule_id'],
    //                 'date' => $validated['date'],
    //             ],
    //             [
    //                 'attendance_status_id' => $validated['attendance_status_id'],
    //             ]
    //         );

    //         return back()->with('success', 'Attendance updated.');
    //     }

    public function setStudentStatus(Request $request)
    {
        $validated = $request->validate([
            'student_id' => 'required|exists:students,id',
            'schedule_id' => 'required|exists:schedules,id',
            'date' => 'required|date',
            'attendance_status_id' => 'required|exists:attendance_statuses,id',
        ]);

        StudentAttendance::updateOrCreate(
            [
                'student_id' => $validated['student_id'],
                'schedule_id' => $validated['schedule_id'],
                'date' => $validated['date'],
            ],
            [
                'attendance_status_id' => $validated['attendance_status_id'],
            ]
        );

        return response()->json(['message' => 'Attendance updated']);
    }

}
