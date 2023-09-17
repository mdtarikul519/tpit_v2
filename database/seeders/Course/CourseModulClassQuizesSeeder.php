<?php

namespace Database\Seeders\Course;

use App\Models\Course\CourseModulClassQuizes;
use Illuminate\Database\Seeder;

class CourseModulClassQuizesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CourseModulClassQuizes::truncate();
        CourseModulClassQuizes::create([
            'course_module_class_id' => 1,
            'quiz_id'  => 1,
        ]);

        CourseModulClassQuizes::truncate();
        CourseModulClassQuizes::create([
            'course_module_class_id' => 2,
            'quiz_id'  => 2,
        ]);
    }
}
