<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProgramSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('programs')->insert([
            ["id" => 1, "program" => "Associate in Computer Technology"],
            ["id" => 2, "program" => "Bachelor of Arts in Broadcasting"],
            ["id" => 3, "program" => "Bachelor of Science in Accountancy"],
            ["id" => 4, "program" => "Bachelor of Science in Accounting Information System"],
            ["id" => 5, "program" => "Bachelor of Science in Information Systems"],
            ["id" => 6, "program" => "Bachelor of Science in Social Work"],
        ]);
    }
}
