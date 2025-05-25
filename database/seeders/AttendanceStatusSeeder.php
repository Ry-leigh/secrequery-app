<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AttendanceStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('attendance_statuses')->insert([
            ["id" => 1, "attendance_status" => "Present"],
            ["id" => 2, "attendance_status" => "Late"],
            ["id" => 3, "attendance_status" => "Absent"],
            ["id" => 4, "attendance_status" => "Excused"],
            ["id" => 5, "attendance_status" => "Suspended"],
        ]);
    }
}
