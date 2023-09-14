<?php

namespace Database\Seeders\Course;

use App\Models\Course\CourseInstructors;
use Illuminate\Database\Seeder;

class CourseInstructorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * @return void
     *
     */
    public function run()
    {
        CourseInstructors::truncate();
        CourseInstructors::create([
            'user_id' => 1,
            'course_id' =>1 ,
            'full_name' => '',
            'cover_photo' =>'',
            'details' =>'',
        ]);

        CourseInstructors::create([
                'user_id' => 1,
                'course_id' =>1 ,
                'full_name' => '',
                'cover_photo' =>'',
                'details' =>'',
            ]);

    }
}
