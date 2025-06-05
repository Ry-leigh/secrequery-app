<?php

namespace App\Http\Controllers;

use App\Models\Day;
use App\Models\InstructorAttendance;
use App\Models\Schedule;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InstructorAttendanceController extends Controller
{
    public function index($date)
    {
        $secretary = Student::where('user_id', Auth::id())->first();
        $dayId = Day::where('day', \Carbon\Carbon::parse($date)->format('l'))->value('id') - 1;
        $student = Student::where('user_id', $secretary->user_id)->first();
        $schedules = Schedule::where('program_id', $student->program_id)
                             ->where('year_level_id', $student->year_level_id)
                             ->where('day_id', $dayId)
                             ->get();
        
        $scheduleIds = $schedules->pluck('id')->toArray();

        $instructorAttendance = InstructorAttendance::where('date', $date)
                                                    ->whereIn('schedule_id', $scheduleIds)
                                                    ->get();
        
        return view('secretary.instructor-attendance', compact('schedules', 'instructorAttendance', 'date'));
    }

    public function timeIn(Request $request, $date, $schedule)
    {
        $timeIn = $request->input('time_in') ?? $request->input('default_time_in');

        InstructorAttendance::updateOrCreate(
            [
                'date' => $date,
                'schedule_id' => $schedule,
            ],
            [
                'time_in' => $timeIn,
            ]
        );

        return redirect()->back()->with('success', 'Time-in recorded successfully');
    }

    public function timeOut(Request $request, $date, $schedule)
    {
        $timeOut = $request->input('time_out') ?? $request->input('default_time_out');

        InstructorAttendance::updateOrCreate(
            [
                'date' => $date,
                'schedule_id' => $schedule,
            ],
            [
                'time_out' => $timeOut,
            ]
        );

        return redirect()->back()->with('success', 'Time-out recorded successfully');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(InstructorAttendance $instructorAttendance)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(InstructorAttendance $instructorAttendance)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, InstructorAttendance $instructorAttendance)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(InstructorAttendance $instructorAttendance)
    {
        //
    }
}
