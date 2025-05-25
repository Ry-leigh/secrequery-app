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
            // ["id" => 1, "year_level_id" => , "program_id" => , "course_id" => , "instructor_id" => , "day_id" => , "starts_at" => , "ends_at" => ],
        ]);
    }
}
