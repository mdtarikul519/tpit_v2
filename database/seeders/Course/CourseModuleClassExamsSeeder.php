<?php

namespace Database\Seeders\Course;

use App\Models\Course\CourseModulClassExams;
use Illuminate\Database\Seeder;

class CourseModuleClassExamsSeeder extends Seeder
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
            'course_id' => 1,
            'course_module_class_id' => 1,
            'exam_id'  => 1,
        ]);
        CourseModulClassExams::create([
            'course_id' => 1,
            'course_module_class_id' => 2,
            'exam_id'  => 2,
        ]);
    }
}
