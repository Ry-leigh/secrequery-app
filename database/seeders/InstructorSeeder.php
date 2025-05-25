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
            // ["id" => 1, "user_id" => , "position_id" => ]
        ]);
    }
}
