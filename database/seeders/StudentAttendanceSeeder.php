<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentAttendanceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('student_attendance_records')->insert([
            // ["id" => , "student_id" => , "schedule_id" => , "date" => , "attendance_status_id" => , "notes" => ],
        ]);
    }
}
