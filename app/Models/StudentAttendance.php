<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentAttendance extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_id',
        'schedule_id',
        'date',
        'attendance_status_id',
    ];

    protected $table = 'student_attendance_records';

    public function student() {
        return $this->belongsTo(Student::class);
    }

    public function schedule() {
        return $this->belongsTo(Schedule::class);
    }

    public function attendanceStatus() {
        return $this->belongsTo(AttendanceStatus::class);
    }
}
