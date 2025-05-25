<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\YearLevel;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            RoleSeeder::class,
            UserSeeder::class,
            YearLevelSeeder::class,
            ProgramSeeder::class,
            CourseSeeder::class,
            StaffCategorySeeder::class,
            PositionSeeder::class,
            InstructorSeeder::class,
            DaySeeder::class,
            ScheduleSeeder::class,
            InstructorAttendanceSeeder::class,
            StudentSeeder::class,
            IrregularStudentCourseSeeder::class,
            AttendanceStatusSeeder::class,
            StudentAttendanceSeeder::class,
            NoteSeeder::class,
            TaskSeeder::class,
            EventSeeder::class
        ]);
    }
}
