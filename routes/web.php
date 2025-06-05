<?php

use App\Http\Controllers\InstructorAttendanceController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentAttendance;
use App\Http\Controllers\StudentAttendanceController;
use App\Models\InstructorAttendance;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


//middleware('secretary), prefix('secretary/instructor'), name('secretary)
Route::get('/secretary/instructor/attendance/{date}/{user}', [InstructorAttendanceController::class, 'index'])->name('secretary.instructor.index');
Route::post('/secretary/instructors/time-in/{date}/{schedule}', [InstructorAttendanceController::class, 'timeIn'])->name('secretary.instructor.timeIn');
Route::post('/secretary/instructors/time-out/{date}/{schedule}', [InstructorAttendanceController::class, 'timeOut'])->name('secretary.instructor.timeOut');

Route::get('/secretary/attenndance/{date}/{schedule}', [StudentAttendanceController::class, 'index'])->name('secretary.attendance.index');
Route::post('/secretary/attenndance', [StudentAttendanceController::class, 'setStudentStatus'])->name('secretary.attendance.register');

require __DIR__.'/auth.php';
