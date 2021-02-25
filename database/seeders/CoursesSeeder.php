<?php

namespace Database\Seeders;

use App\Models\Course;
use Database\Factories\CourseFactory;
use Illuminate\Database\Seeder;

class CoursesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Course::created((new CourseFactory())->definition());
    }
}
