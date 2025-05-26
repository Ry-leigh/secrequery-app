<?php

use App\Http\Controllers\InstructorAttendanceController;
use App\Http\Controllers\ProfileController;
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

Route::get('/attendance/{date}/{user}', [InstructorAttendanceController::class, 'index'])->name('secretary.attendance.index');
Route::post('/attendance/time-in/{date}/{schedule}', [InstructorAttendanceController::class, 'timeIn'])->name('attendance.timeIn');
Route::post('/attendance/time-out/{date}/{schedule}', [InstructorAttendanceController::class, 'timeOut'])->name('attendance.timeOut');

require __DIR__.'/auth.php';
