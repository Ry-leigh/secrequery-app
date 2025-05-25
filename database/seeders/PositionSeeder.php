<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PositionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('positions')->insert([
            ["id" => 1, "staff_category_id" => 1, "position" => "Program Head"],
            ["id" => 2, "staff_category_id" => 1, "position" => "Proctor"],
            ["id" => 3, "staff_category_id" => 1, "position" => "Teacher"],
            ["id" => 4, "staff_category_id" => 1, "position" => "Lecturer"],
            ["id" => 5, "staff_category_id" => 2, "position" => "Administrator"],
            ["id" => 6, "staff_category_id" => 2, "position" => "Registrar"],
            ["id" => 7, "staff_category_id" => 2, "position" => "Data Privacy Officer"],
            ["id" => 8, "staff_category_id" => 2, "position" => "PSAS Officer"],
            ["id" => 9, "staff_category_id" => 2, "position" => "Librarian"],
        ]);
    }
}
