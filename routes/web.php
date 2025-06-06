<?php

use App\Http\Controllers\EventController;
use App\Http\Controllers\InstructorAttendanceController;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentAttendance;
use App\Http\Controllers\StudentAttendanceController;
use App\Http\Controllers\TaskController;
use App\Models\InstructorAttendance;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', function() {return view('dashboard');})->name('dashboard');
    Route::get('/attendance/{date}', [StudentAttendanceController::class, 'index'])->name('attendance');
    Route::get('/events', [EventController::class, 'index'])->name('events');

});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

});

//middleware('secretary), prefix('secretary/instructor'), name('secretary)
Route::get('/secretary/instructor/attendance/{date}', [InstructorAttendanceController::class, 'index'])->name('secretary.instructor.index');
Route::post('/secretary/instructors/time-in/{date}/{schedule}', [InstructorAttendanceController::class, 'timeIn'])->name('secretary.instructor.timeIn');
Route::post('/secretary/instructors/time-out/{date}/{schedule}', [InstructorAttendanceController::class, 'timeOut'])->name('secretary.instructor.timeOut');

Route::get('/secretary/attenndance/{date}/{schedule}', [StudentAttendanceController::class, 'secretaryIndex'])->name('secretary.attendance.index');
Route::post('/secretary/attenndance/set-status', [StudentAttendanceController::class, 'setStudentStatus'])->name('secretary.attendance.register');

require __DIR__.'/auth.php';
/*
    Recommendations:
        1. Schedule override for exam days and make-up classes
        2. Enable image or links in events for "more details"
        3. Add script to have the events scrolled on the current month
        4. Add POST, PUT, DELETR methods for admins and superadmins so events are not hardcoded
        5. Notes and Tasks are resource which are simple CRUD, would be nice to make it complex in the background so it is more simple in the client-side
*/