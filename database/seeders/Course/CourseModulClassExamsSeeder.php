<?php

namespace Database\Seeders\Course;

use App\Models\Course\CourseModulClassExams;
use Illuminate\Database\Seeder;

class CourseModulClassExamsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CourseModulClassExams::truncate();
        CourseModulClassExams::create([
            'course_module_class_id' => 1,
            'exam_id'  => 1,
        ]);

        CourseModulClassExams::truncate();
        CourseModulClassExams::create([
            'course_module_class_id' => 2,
            'exam_id'  => 2,
        ]);
    }
}
