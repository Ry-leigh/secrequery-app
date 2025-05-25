<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    public function instructor() {
        return $this->belongsTo(Instructor::class);
    }

    public function course() {
        return $this->belongsTo(Course::class);
    }

    public function program() {
        return $this->belongsTo(Program::class);
    }

    public function yearLevel() {
        return $this->belongsTo(YearLevel::class);
    }

    public function day() {
        return $this->belongsTo(Day::class);
    }

    public function instructorAttendances() {
        return $this->hasMany(InstructorAttendance::class);
    }

    public function studentAttendances() {
        return $this->hasMany(StudentAttendance::class);
    }
}

