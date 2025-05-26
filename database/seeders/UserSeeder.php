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
                "suffix" => null,
                "email" => "carlosoleta@gmail.com",
                "password" => Hash::make('admin123')
            ],
            [
                'id' => 2,
                'role_id' => 1,
                "first_name" => "Ry",
                "middle_name" => null,
                "last_name" => "DC",
                "suffix" => null,
                "email" => "mythrynne@gmail.com",
                "password" => Hash::make('admin123')
            ],
            [
                'id' => 3,
                'role_id' => 1,
                "first_name" => "Jojo",
                "middle_name" => null,
                "last_name" => "P",
                "suffix" => null,
                "email" => "pantallanojojo1994@gmail.com",
                "password" => Hash::make('admin123')
            ],
            [
                'id' => 4,
                'role_id' => 2,
                "first_name" => "Stella",
                "middle_name" => null,
                "last_name" => "J",
                "suffix" => null,
                "email" => "estela@gmail.com",
                "password" => Hash::make('admin123')
            ],
            [
                'id' => 5,
                'role_id' => 2,
                "first_name" => "Denden",
                "middle_name" => null,
                "last_name" => "C",
                "suffix" => null,
                "email" => "jaden@gmail.com",
                "password" => Hash::make('admin123')
            ],
            [
                'id' => 6,
                'role_id' => 2,
                "first_name" => "Kenshin",
                "middle_name" => null,
                "last_name" => "S",
                "suffix" => null,
                "email" => "ashken@gmail.com",
                "password" => Hash::make('admin123')
            ],
            [
                'id' => 7,
                'role_id' => 2,
                "first_name" => "Cj",
                "middle_name" => null,
                "last_name" => "R",
                "suffix" => null,
                "email" => "christian@gmail.com",
                "password" => Hash::make('admin123')
            ],
            [
                'id' => 8,
                'role_id' => 3,
                "first_name" => "Krisitan",
                "middle_name" => null,
                "last_name" => "Belchez",
                "suffix" => null,
                "email" => "sirkristian@gmail.com",
                "password" => Hash::make('teaching')
            ],
            [
                'id' => 9,
                'role_id' => 3,
                "first_name" => "Daniel John",
                "middle_name" => null,
                "last_name" => "Saballa",
                "suffix" => null,
                "email" => "sirdaniel@gmail.com",
                "password" => Hash::make('teaching')
            ],
            [
                'id' => 10,
                'role_id' => 3,
                "first_name" => "Agustin",
                "middle_name" => null,
                "last_name" => "Zacarias",
                "suffix" => "III",
                "email" => "siragustin@gmail.com",
                "password" => Hash::make('teaching')
            ],
            [
                'id' => 11,
                'role_id' => 3,
                "first_name" => "Carlo",
                "middle_name" => null,
                "last_name" => "Soleta",
                "suffix" => null,
                "email" => "sircarlo@gmail.com",
                "password" => Hash::make('teaching')
            ],
            [
                'id' => 12,
                'role_id' => 3,
                "first_name" => "Renan Jan",
                "middle_name" => null,
                "last_name" => "Baluca",
                "suffix" => null,
                "email" => "sirrenan@gmail.com",
                "password" => Hash::make('teaching')
            ],
            [
                'id' => 13,
                'role_id' => 3,
                "first_name" => "Rhea",
                "middle_name" => null,
                "last_name" => "Sasondoncillo",
                "suffix" => null,
                "email" => "maamrhea@gmail.com",
                "password" => Hash::make('teaching')
            ],
            [
                'id' => 14,
                'role_id' => 3,
                "first_name" => "Princess",
                "middle_name" => null,
                "last_name" => "Clorion",
                "suffix" => null,
                "email" => "maamprincess@gmail.com",
                "password" => Hash::make('teaching')
            ],
            [
                'id' => 15,
                'role_id' => 4,
                "first_name" => "Ryan Aaron",
                "middle_name" => "Raguine",
                "last_name" => "Dela Cruz",
                "suffix" => null,
                "email" => "ryanaarondc@gmail.com",
                "password" => Hash::make('123123123')
            ],
        ]);
    }
}
