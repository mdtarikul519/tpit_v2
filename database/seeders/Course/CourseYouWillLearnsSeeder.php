<?php

namespace Database\Seeders\Course;

use App\Models\Course\CourseWillLearns;
use App\Models\Course\CourseYouWillLearns;
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
        CourseYouWillLearns::truncate();
        CourseYouWillLearns::create([
            'course_id' => 1,
            'title' => 'web design',
        ]);
        CourseYouWillLearns::create([
            'course_id' => 1,
            'title' => 'graphich design',
        ]);
        CourseYouWillLearns::create([
            'course_id' => 1,
            'title' => 'database manegment',
        ]);

    }
}
