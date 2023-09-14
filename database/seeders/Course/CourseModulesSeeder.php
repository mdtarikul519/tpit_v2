<?php

namespace Database\Seeders\Course;

use App\Models\Course\CourseModul;
use Illuminate\Database\Seeder;

class CourseModulesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CourseModul::truncate();
        CourseModul::create([
            'course_id' => 1,
            'module_id' => 1,
            'class_id' => 1,
            'user_id' => 1,
            'quiz_id' => 1,
        ]);

        CourseModul::create([
            'course_id' => 2,
            'module_id' => 2,
            'class_id' => 2,
            'user_id' => 2,
            'quiz_id' => 2,
        ]);

        CourseModul::create([
            'course_id' => 3,
            'module_id' => 3,
            'class_id' => 3,
            'user_id' => 3,
            'quiz_id' => 3,
        ]);

    }
}
