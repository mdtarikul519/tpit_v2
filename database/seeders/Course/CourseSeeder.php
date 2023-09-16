<?php

namespace Database\Seeders\Course;

use App\Models\Course\Course;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Course::truncate();
        Course::create([
            'id' => 1,
            'title' => 'web design',
            'image' =>'web.jpg',
            'intro_vedio' => 'https://www.youtube.com/',
            'what_is_this_course' => 1,
            'why_is_this_course' => 1,
        ]);
    }
}
