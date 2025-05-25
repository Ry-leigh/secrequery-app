<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StaffCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('staff_categories')->insert([
            ["id" => 1, "staff_category" => "Teaching"],
            ["id" => 2, "staff_category" => "Non-Teaching"],
        ]);
    }
}
