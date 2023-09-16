<?php

namespace Database\Seeders\Course;

use App\Models\Course\CourseWhatYouWillGets;
use Illuminate\Database\Seeder;

class CourseWhatYouWillGetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CourseWhatYouWillGets::truncate();
        CourseModulAtAGlances::create([
            'course_id' => 1,
            'title' => 'ইন্টার্নশিপ সুযোগ',
        ]);

       ;

    }
}
