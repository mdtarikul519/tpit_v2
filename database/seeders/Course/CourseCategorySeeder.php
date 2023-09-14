<?php

namespace Database\Seeders\Course;

use App\Models\Course\CourseCategory;
use Illuminate\Database\Seeder;

class CourseCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CourseCategory::truncate();
        CourseCategory::create([
            'title' => 'ওয়েব ডিজাইন',
        ]);
        CourseCategory::create([

            'title' => 'ওয়েব ডেভেলপম্যান্ট ',
        ]);
        CourseCategory::create([
            'title' => 'গ্রাফিক্স ডিজাইন',
        ]);
        CourseCategory::create([
            'title' => 'ডিজিটাল মার্কেটিং',
        ]);
       ;
    }
}
