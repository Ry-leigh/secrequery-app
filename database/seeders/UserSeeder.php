<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'id' => 1,
                'role_id' => 1,
                "first_name" => "Carlo",
                "middle_name" => null,
                "last_name" => "S",
                "email" => "carlosoleta@gmail.com",
                "password" => Hash::make('admin123')
            ],
            [
                'id' => 2,
                'role_id' => 1,
                "first_name" => "Ry",
                "middle_name" => null,
                "last_name" => "DC",
                "email" => "mythrynne@gmail.com",
                "password" => Hash::make('admin123')
            ],
            [
                'id' => 3,
                'role_id' => 1,
                "first_name" => "Jojo",
                "middle_name" => null,
                "last_name" => "P",
                "email" => "antallanojojo1994@gmail.com",
                "password" => Hash::make('admin123')
            ],
            [
                'id' => 4,
                'role_id' => 2,
                "first_name" => "Stella",
                "middle_name" => null,
                "last_name" => "J",
                "email" => "estela@gmail.com",
                "password" => Hash::make('admin123')
            ],
            [
                'id' => 5,
                'role_id' => 2,
                "first_name" => "Denden",
                "middle_name" => null,
                "last_name" => "C",
                "email" => "jaden@gmail.com",
                "password" => Hash::make('admin123')
            ],
            [
                'id' => 6,
                'role_id' => 2,
                "first_name" => "Kenshin",
                "middle_name" => null,
                "last_name" => "S",
                "email" => "ashken@gmail.com",
                "password" => Hash::make('admin123')
            ],
            [
                'id' => 7,
                'role_id' => 2,
                "first_name" => "Cj",
                "middle_name" => null,
                "last_name" => "R",
                "email" => "christian@gmail.com",
                "password" => Hash::make('admin123')
            ],
        ]);
    }
}
