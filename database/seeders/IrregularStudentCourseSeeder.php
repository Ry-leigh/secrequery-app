<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IrregularStudentCourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('irregular_student_courses')->insert([
            ["id" => 1, "student_id" => 7, "schedule_id" => 1],
            ["id" => 2, "student_id" => 7, "schedule_id" => 2],
            ["id" => 3, "student_id" => 7, "schedule_id" => 3],
            ["id" => 4, "student_id" => 7, "schedule_id" => 4],
            ["id" => 5, "student_id" => 7, "schedule_id" => 6],
            ["id" => 6, "student_id" => 7, "schedule_id" => 7],
            ["id" => 7, "student_id" => 7, "schedule_id" => 8],
            ["id" => 8, "student_id" => 7, "schedule_id" => 9],
            ["id" => 9, "student_id" => 7, "schedule_id" => 12],
            ["id" => 10, "student_id" => 7, "schedule_id" => 13],
            ["id" => 11, "student_id" => 7, "schedule_id" => 16],
            ["id" => 12, "student_id" => 7, "schedule_id" => 18],
            ["id" => 13, "student_id" => 7, "schedule_id" => 19],
            ["id" => 14, "student_id" => 10, "schedule_id" => 1],
            ["id" => 15, "student_id" => 10, "schedule_id" => 2],
            ["id" => 16, "student_id" => 10, "schedule_id" => 4],
            ["id" => 17, "student_id" => 10, "schedule_id" => 6],
            ["id" => 18, "student_id" => 10, "schedule_id" => 8],
            ["id" => 19, "student_id" => 10, "schedule_id" => 11],
            ["id" => 20, "student_id" => 10, "schedule_id" => 12],
            ["id" => 21, "student_id" => 10, "schedule_id" => 16],
            ["id" => 22, "student_id" => 10, "schedule_id" => 18],
            ["id" => 23, "student_id" => 10, "schedule_id" => 19],
        ]);
    }
}
