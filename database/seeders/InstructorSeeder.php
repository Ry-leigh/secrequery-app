<?php

namespace Database\Seeders;

use App\Models\Instructor;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InstructorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $instructors = User::where('role_id', 3)->get();

        // foreach ($instructors as $instructor) {
        //     Instructor::create([
        //         'user_id' => $instructor->id,
        //         'position_id' => null,
        //     ]);
        // }

        DB::table('instructors')->insert([
            ["id" => 1, "user_id" => 8, "position_id" => 2, "gender" => "Male"],
            ["id" => 2, "user_id" => 9, "position_id" => 2, "gender" => "Male"],
            ["id" => 3, "user_id" => 10, "position_id" => 2, "gender" => "Male"],
            ["id" => 4, "user_id" => 11, "position_id" => 4, "gender" => "Male"],
            ["id" => 5, "user_id" => 12, "position_id" => 2, "gender" => "Male"],
            ["id" => 6, "user_id" => 13, "position_id" => 2, "gender" => "Female"],
            ["id" => 7, "user_id" => 14, "position_id" => 4, "gender" => "Female"],
        ]);
    }
}
