<?php

namespace Database\Seeders\Course;

use App\Models\Course\CourseModulAtAGlances;
use Illuminate\Database\Seeder;

class CourseModulesAtAGlancesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CourseModulAtAGlances::truncate();
        CourseModulAtAGlances::create([
            'course_id' => 1,
            'title' => 'ইন্টার্নশিপ সুযোগ',
        ]);

        CourseModulAtAGlances::create([
            'course_id' => 2,
            'title' => 'জব/ফ্রিলান্সিং গাইডলাইন',
        ]);

        CourseModulAtAGlances::create([
            'course_id' => 3,
            'title' => '১৫ টি কুইজ',
        ]);

        CourseModulAtAGlances::create([
            'course_id' => 4,
            'title' => 'কোর্স শেসে সার্টিফিকেট প্রদান',
        ]);

    }
}
