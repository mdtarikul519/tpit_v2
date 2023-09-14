<?php

namespace Database\Seeders\Course;

use App\Models\Course\CourseFaqs;
use Illuminate\Database\Seeder;

class CourseFaqsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CourseFaqs::truncate();
        CourseFaqs::create([
            'course_id' => 1,
            'title' => 'ইন্টারনেট সংযোগ যুক্ত কম্পিউটার',
        ]);

        CourseFaqs::create([
            'course_id' => 2,
            'title' => 'অক্লান্ত পরিশ্রমী',
        ]);
    }
}
