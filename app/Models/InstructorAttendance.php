<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InstructorAttendance extends Model
{
    use HasFactory;

    protected $table = 'instructor_attendance_records';

    protected $fillable = [
        'schedule_id',
        'date',
        'time_in',
        'time_out',
    ];

    public function schedule() {
        return $this->belongsTo(Schedule::class);
    }
}
