<?php

namespace Database\Seeders\Course;

use App\Models\Course\CourseWillLearns;
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
        CourseWillLearns::truncate();
        CourseWillLearns::create([
            'course_id' => 1,
            'title' => 'এই কোর্সে যা যা শিখবেন',
        ]);

    }
}
