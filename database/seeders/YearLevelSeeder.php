<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class YearLevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('year_levels')->insert([
            ["id" => 1, "year_level" => "1st year"],
            ["id" => 2, "year_level" => "2nd year"],
            ["id" => 3, "year_level" => "3rd year"],
            ["id" => 4, "year_level" => "4th year"],
        ]);
    }
}
