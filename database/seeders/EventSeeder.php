<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('events')->insert([
            [
                "id" => 1, 
                "user_id" => 2, 
                "date" => "2025-06-09", 
                "title" => "Finals Examination", 
                "content" => "Finals Examination - Day 1"
            ],
            [
                "id" => 2, 
                "user_id" => 2, 
                "date" => "2025-06-10", 
                "title" => "Finals Examination", 
                "content" => "Finals Examination - Day 2"
            ],
            [
                "id" => 3, 
                "user_id" => 2, 
                "date" => "2025-06-11", 
                "title" => "Finals Examination", 
                "content" => "Finals Examination - Day 3"
            ],
            [
                "id" => 4, 
                "user_id" => 2, 
                "date" => "2025-06-13", 
                "title" => "Finals Examination", 
                "content" => "Finals Examination - Day 4"
            ],
            [
                "id" => 5, 
                "user_id" => 2, 
                "date" => "2025-06-14", 
                "title" => "Finals Examination", 
                "content" => "Finals Examination - Day 5"
            ],
            [
                "id" => 6, 
                "user_id" => 2, 
                "date" => "2025-06-16", 
                "title" => "Finals Examination", 
                "content" => "Finals Examination - Day 6"
            ],
            [
                "id" => 7, 
                "user_id" => 2, 
                "date" => "2025-06-17", 
                "title" => "PathFIT Culminating Activity", 
                "content" => "2nd Year College PathFIT Culminating Activity"
            ],
            [
                "id" => 8, 
                "user_id" => 2, 
                "date" => "2025-06-06", 
                "title" => "No Classes", 
                "content" => "Regular Holiday - Proclamation No. 911, No classes and office transactions"
            ],
            [
                "id" => 9, 
                "user_id" => 2, 
                "date" => "2025-05-07", 
                "title" => "No Classes", 
                "content" => "Special Non-Working Holiday - No classes and office transactions"
            ],
            [
                "id" => 10, 
                "user_id" => 2, 
                "date" => "2025-05-12", 
                "title" => "No Classes", 
                "content" => "Special Non-Working Holiday - No classes and office transactions"
            ],
        ]);
    }
}
