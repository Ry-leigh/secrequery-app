<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InstructorAttendance extends Model
{
    use HasFactory;

    protected $table = 'instructor_attendance_records';

    public function schedule() {
        return $this->belongsTo(Schedule::class);
    }
}
