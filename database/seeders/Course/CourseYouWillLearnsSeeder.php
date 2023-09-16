<?php

namespace Database\Seeders\Course;

use Illuminate\Database\Seeder;

class CourseYouWillLearnsSeeder extends Seeder
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

    }
}
