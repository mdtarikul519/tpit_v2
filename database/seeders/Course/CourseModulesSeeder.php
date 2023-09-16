<?php

namespace Database\Seeders\Course;

use App\Models\Course\CourseModul;
use Illuminate\Database\Seeder;

class CourseModulesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        CourseModul::truncate();
        CourseModul::create([
            'course_id' => 1,
            'moduls_no' => 1,
            'title' => 'Frontend Recap',
        ]);   
      
    }
}
