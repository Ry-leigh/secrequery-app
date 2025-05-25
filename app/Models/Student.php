<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public function user() {
        return $this->belongsTo(User::class);
    }

    public function yearLevel() {
        return $this->belongsTo(YearLevel::class);
    }

    public function program() {
        return $this->belongsTo(Program::class);
    }

    public function attendanceRecords() {
        return $this->hasMany(StudentAttendance::class);
    }

    public function irregularCourses() {
        return $this->hasMany(IrregularStudentCourse::class);
    }
}
