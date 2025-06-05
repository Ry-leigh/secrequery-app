<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('students')->insert([
            ["id" => 1, "user_id" => 15, "year_level_id" => 2, "program_id" => 1, "irregular" => false],
            ["id" => 2, "user_id" => 16, "year_level_id" => 2, "program_id" => 1, "irregular" => false],
            ["id" => 3, "user_id" => 17, "year_level_id" => 2, "program_id" => 1, "irregular" => false],
            ["id" => 4, "user_id" => 18, "year_level_id" => 2, "program_id" => 1, "irregular" => false],
            ["id" => 5, "user_id" => 19, "year_level_id" => 2, "program_id" => 1, "irregular" => false],
            ["id" => 6, "user_id" => 20, "year_level_id" => 2, "program_id" => 1, "irregular" => false],
            ["id" => 7, "user_id" => 21, "year_level_id" => 2, "program_id" => 1, "irregular" => true],
            ["id" => 8, "user_id" => 22, "year_level_id" => 2, "program_id" => 1, "irregular" => false],
            ["id" => 9, "user_id" => 23, "year_level_id" => 2, "program_id" => 1, "irregular" => false],
            ["id" => 10, "user_id" => 24, "year_level_id" => 2, "program_id" => 1, "irregular" => true],
            ["id" => 11, "user_id" => 25, "year_level_id" => 2, "program_id" => 1, "irregular" => false],
            ["id" => 12, "user_id" => 26, "year_level_id" => 2, "program_id" => 1, "irregular" => false],
            ["id" => 13, "user_id" => 27, "year_level_id" => 2, "program_id" => 1, "irregular" => false],
            ["id" => 14, "user_id" => 28, "year_level_id" => 2, "program_id" => 1, "irregular" => false],
            ["id" => 15, "user_id" => 29, "year_level_id" => 2, "program_id" => 1, "irregular" => false],
            ["id" => 16, "user_id" => 30, "year_level_id" => 2, "program_id" => 1, "irregular" => false],
            ["id" => 17, "user_id" => 31, "year_level_id" => 2, "program_id" => 1, "irregular" => false],
            ["id" => 18, "user_id" => 32, "year_level_id" => 2, "program_id" => 1, "irregular" => false],
            ["id" => 19, "user_id" => 33, "year_level_id" => 2, "program_id" => 1, "irregular" => false],
            ["id" => 20, "user_id" => 34, "year_level_id" => 2, "program_id" => 1, "irregular" => false],
            ["id" => 21, "user_id" => 35, "year_level_id" => 2, "program_id" => 1, "irregular" => false],
            ["id" => 22, "user_id" => 36, "year_level_id" => 2, "program_id" => 1, "irregular" => false],
            ["id" => 23, "user_id" => 37, "year_level_id" => 2, "program_id" => 2, "irregular" => false],
            
        ]);
    }
}
