<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ScheduleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('schedules')->insert([
            ["id" => 1, "year_level_id" => 2, "program_id" => 1, "course_id" => 92, "instructor_id" => 1, "day_id" => 1, "starts_at" => "10:30:00", "ends_at" => "12:00:00"],
            ["id" => 2, "year_level_id" => 2, "program_id" => 1, "course_id" => 99, "instructor_id" => 2, "day_id" => 1, "starts_at" => "13:00:00", "ends_at" => "14:30:00"],
            ["id" => 3, "year_level_id" => 2, "program_id" => 1, "course_id" => 25, "instructor_id" => 3, "day_id" => 1, "starts_at" => "15:00:00", "ends_at" => "16:00:00"],
            ["id" => 4, "year_level_id" => 2, "program_id" => 1, "course_id" => 165, "instructor_id" => 4, "day_id" => 1, "starts_at" => "17:00:00", "ends_at" => "19:00:00"],
            ["id" => 5, "year_level_id" => 2, "program_id" => 1, "course_id" => 135, "instructor_id" => 3, "day_id" => 2, "starts_at" => "10:30:00", "ends_at" => "12:00:00"],
            ["id" => 6, "year_level_id" => 2, "program_id" => 1, "course_id" => 102, "instructor_id" => 2, "day_id" => 2, "starts_at" => "13:00:00", "ends_at" => "14:30:00"],
            ["id" => 7, "year_level_id" => 2, "program_id" => 1, "course_id" => 114, "instructor_id" => 5, "day_id" => 2, "starts_at" => "15:00:00", "ends_at" => "16:00:00"],
            ["id" => 8, "year_level_id" => 2, "program_id" => 1, "course_id" => 165, "instructor_id" => 4, "day_id" => 2, "starts_at" => "17:00:00", "ends_at" => "18:30:00"],
            ["id" => 9, "year_level_id" => 2, "program_id" => 1, "course_id" => 99, "instructor_id" => 2, "day_id" => 3, "starts_at" => "13:00:00", "ends_at" => "14:30:00"],
            ["id" => 10, "year_level_id" => 2, "program_id" => 1, "course_id" => 10, "instructor_id" => 6, "day_id" => 3, "starts_at" => "14:30:00", "ends_at" => "15:30:00"],
            ["id" => 11, "year_level_id" => 2, "program_id" => 1, "course_id" => 60, "instructor_id" => 7, "day_id" => 3, "starts_at" => "16:00:00", "ends_at" => "19:00:00"],
            ["id" => 12, "year_level_id" => 2, "program_id" => 1, "course_id" => 92, "instructor_id" => 1, "day_id" => 4, "starts_at" => "08:00:00", "ends_at" => "09:30:00"],
            ["id" => 13, "year_level_id" => 2, "program_id" => 1, "course_id" => 25, "instructor_id" => 3, "day_id" => 4, "starts_at" => "10:00:00", "ends_at" => "11:00:00"],
            ["id" => 14, "year_level_id" => 2, "program_id" => 1, "course_id" => 10, "instructor_id" => 6, "day_id" => 4, "starts_at" => "13:00:00", "ends_at" => "15:00:00"],
            ["id" => 15, "year_level_id" => 2, "program_id" => 1, "course_id" => 135, "instructor_id" => 3, "day_id" => 4, "starts_at" => "15:00:00", "ends_at" => "16:30:00"],
            ["id" => 16, "year_level_id" => 2, "program_id" => 1, "course_id" => 165, "instructor_id" => 4, "day_id" => 4, "starts_at" => "17:00:00", "ends_at" => "18:30:00"],
            ["id" => 17, "year_level_id" => 2, "program_id" => 1, "course_id" => 114, "instructor_id" => 5, "day_id" => 5, "starts_at" => "11:00:00", "ends_at" => "12:00:00"],
            ["id" => 18, "year_level_id" => 2, "program_id" => 1, "course_id" => 102, "instructor_id" => 2, "day_id" => 5, "starts_at" => "13:00:00", "ends_at" => "14:30:00"],
            ["id" => 19, "year_level_id" => 2, "program_id" => 1, "course_id" => 161, "instructor_id" => 7, "day_id" => 5, "starts_at" => "16:00:00", "ends_at" => "19:00:00"],
        ]);
    }
}
