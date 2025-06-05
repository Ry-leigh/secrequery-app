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
                "email" => "ryanaarondc@gmail.com",
                "password" => Hash::make('admin123')
            ],
            [
                'id' => 3,
                'role_id' => 1,
                "first_name" => "Jojo",
                "middle_name" => null,
                "last_name" => "P",
                "suffix" => null,
                "email" => "jojojo@gmail.com",
                "password" => Hash::make('admin123')
            ],
            [
                'id' => 4,
                'role_id' => 2,
                "first_name" => "Stella",
                "middle_name" => null,
                "last_name" => "J",
                "suffix" => null,
                "email" => "stella@gmail.com",
                "password" => Hash::make('admin123')
            ],
            [
                'id' => 5,
                'role_id' => 2,
                "first_name" => "Denden",
                "middle_name" => null,
                "last_name" => "C",
                "suffix" => null,
                "email" => "denden@gmail.com",
                "password" => Hash::make('admin123')
            ],
            [
                'id' => 6,
                'role_id' => 2,
                "first_name" => "Kenshin",
                "middle_name" => null,
                "last_name" => "S",
                "suffix" => null,
                "email" => "kenshin@gmail.com",
                "password" => Hash::make('admin123')
            ],
            [
                'id' => 7,
                'role_id' => 2,
                "first_name" => "Cj",
                "middle_name" => null,
                "last_name" => "R",
                "suffix" => null,
                "email" => "cjcjcj@gmail.com",
                "password" => Hash::make('admin123')
            ],
//----------instructors---------------------------------
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
//----------students------------------------------------
            [
                'id' => 15,
                'role_id' => 5,
                "first_name" => "Nicklee",
                "middle_name" => "Odoño",
                "last_name" => "Almaida",
                "suffix" => null,
                "email" => "nicklee@gmail.com",
                "password" => Hash::make('123123123')
            ],
            [
                'id' => 16,
                'role_id' => 5,
                "first_name" => "Louise Anne",
                "middle_name" => "Surio",
                "last_name" => "Bechayda",
                "suffix" => null,
                "email" => "louiseanne@gmail.com",
                "password" => Hash::make('123123123')
            ],
            [
                'id' => 17,
                'role_id' => 5,
                "first_name" => "Jocelyn",
                "middle_name" => "Sumayang",
                "last_name" => "Bendoy",
                "suffix" => null,
                "email" => "jocelyn@gmail.com",
                "password" => Hash::make('123123123')
            ],
            [
                'id' => 18,
                'role_id' => 5,
                "first_name" => "Jaden",
                "middle_name" => "Belardo",
                "last_name" => "Calimlim",
                "suffix" => null,
                "email" => "jaden@gmail.com",
                "password" => Hash::make('123123123')
            ],
            [
                'id' => 19,
                'role_id' => 5,
                "first_name" => "Kirk Percival",
                "middle_name" => "Bondoc",
                "last_name" => "Del Pilar",
                "suffix" => null,
                "email" => "kirkpercival@gmail.com",
                "password" => Hash::make('123123123')
            ],
            [
                'id' => 20,
                'role_id' => 4,
                "first_name" => "Ryan Aaron",
                "middle_name" => "Raguine",
                "last_name" => "Dela Cruz",
                "suffix" => null,
                "email" => "ryanaarondelacruz@student.laverdad.edu.ph",
                "password" => Hash::make('123123123')
            ],
            [
                'id' => 21,
                'role_id' => 5,
                "first_name" => "Embrie",
                "middle_name" => "Abejero",
                "last_name" => "Dela Rosa",
                "suffix" => null,
                "email" => "embrie@gmail.com",
                "password" => Hash::make('123123123')
            ],
            [
                'id' => 22,
                'role_id' => 5,
                "first_name" => "Lei Ann Judea",
                "middle_name" => "Celestial",
                "last_name" => "Dico",
                "suffix" => null,
                "email" => "leiann@gmail.com",
                "password" => Hash::make('123123123')
            ],
            [
                'id' => 23,
                'role_id' => 5,
                "first_name" => "Rasheed Gavin",
                "middle_name" => "Mogro",
                "last_name" => "Esponga",
                "suffix" => null,
                "email" => "rasheed@gmail.com",
                "password" => Hash::make('123123123')
            ],
            [
                'id' => 24,
                'role_id' => 5,
                "first_name" => "Czarina Jane",
                "middle_name" => "Punzalan",
                "last_name" => "Fombuena",
                "suffix" => null,
                "email" => "czarina@gmail.com",
                "password" => Hash::make('123123123')
            ],
            [
                'id' => 25,
                'role_id' => 5,
                "first_name" => "Altia",
                "middle_name" => "Gonzales",
                "last_name" => "Inale",
                "suffix" => null,
                "email" => "altia@gmail.com",
                "password" => Hash::make('123123123')
            ],
            [
                'id' => 26,
                'role_id' => 5,
                "first_name" => "Estela Mae",
                "middle_name" => "Denosta",
                "last_name" => "Jalac",
                "suffix" => null,
                "email" => "estela@gmail.com",
                "password" => Hash::make('123123123')
            ],
            [
                'id' => 27,
                'role_id' => 5,
                "first_name" => "Kermari",
                "middle_name" => "Lisay",
                "last_name" => "Magmayo",
                "suffix" => null,
                "email" => "kermari@gmail.com",
                "password" => Hash::make('123123123')
            ],
            [
                'id' => 28,
                'role_id' => 5,
                "first_name" => "Jorilyn",
                "middle_name" => "Oman",
                "last_name" => "Pantallaño",
                "suffix" => null,
                "email" => "pantallanojojo1994@gmail.com",
                "password" => Hash::make('123123123')
            ],
            [
                'id' => 29,
                'role_id' => 5,
                "first_name" => "Joshua",
                "middle_name" => "Maralit",
                "last_name" => "Pateña",
                "suffix" => null,
                "email" => "joshua@gmail.com",
                "password" => Hash::make('123123123')
            ],
            [
                'id' => 30,
                'role_id' => 5,
                "first_name" => "Mark Jason",
                "middle_name" => "Lajot",
                "last_name" => "Patron",
                "suffix" => null,
                "email" => "markjason@gmail.com",
                "password" => Hash::make('123123123')
            ],
            [
                'id' => 31,
                'role_id' => 5,
                "first_name" => "Samuel Eli Miguel",
                "middle_name" => "Tadipa",
                "last_name" => "Pintado",
                "suffix" => null,
                "email" => "samuel@gmail.com",
                "password" => Hash::make('123123123')
            ],
            [
                'id' => 32,
                'role_id' => 5,
                "first_name" => "Patrick",
                "middle_name" => "Premacio",
                "last_name" => "Pioquinto",
                "suffix" => null,
                "email" => "patrick@gmail.com",
                "password" => Hash::make('123123123')
            ],
            [
                'id' => 33,
                'role_id' => 5,
                "first_name" => "Juan Miguel",
                "middle_name" => "Hero",
                "last_name" => "Ramirez",
                "suffix" => null,
                "email" => "juanmiguel@gmail.com",
                "password" => Hash::make('123123123')
            ],
            [
                'id' => 34,
                'role_id' => 5,
                "first_name" => "Christian Jay",
                "middle_name" => "Seglos",
                "last_name" => "Romero",
                "suffix" => null,
                "email" => "christian@gmail.com",
                "password" => Hash::make('123123123')
            ],
            [
                'id' => 35,
                'role_id' => 5,
                "first_name" => "Romar",
                "middle_name" => "Dumo",
                "last_name" => "Samson",
                "suffix" => null,
                "email" => "romar@gmail.com",
                "password" => Hash::make('123123123')
            ],
            [
                'id' => 36,
                'role_id' => 5,
                "first_name" => "Rain Louie Ashken",
                "middle_name" => "Galario",
                "last_name" => "Soriano",
                "suffix" => null,
                "email" => "ashken@gmail.com",
                "password" => Hash::make('123123123')
            ],
            [
                'id' => 37,
                'role_id' => 5,
                "first_name" => "Christian",
                "middle_name" => "Catacutan",
                "last_name" => "Samson",
                "suffix" => null,
                "email" => "christiansamson@gmail.com",
                "password" => Hash::make('123123123')
            ],
            [
                'id' => 38,
                'role_id' => 5,
                "first_name" => "Juliana Leigh",
                "middle_name" => "",
                "last_name" => "Cerillo",
                "suffix" => null,
                "email" => "mythrynne@gmail.com",
                "password" => Hash::make('123123123')
            ]
        ]);
    }
}
