<?php

namespace Database\Seeders\Course;

use App\Models\Course\CourseBatches;
use Illuminate\Database\Seeder;

class CourseBatchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CourseBatches::truncate();
        CourseBatches::create([
            'course_id' => 1,
            'batch_name' => 'web-202304',
            'admission_start_date' => '2023-09-25',
            'admission_end_date' => '2023-10-25',
            'batch_student_limit' => 30,
            'seat_booked' => rand(5,10),
            'course_price' => 10000,
            'course_discount' => 30,
            'after_discount_price' => 7000,
            'first_class_date' => '2023-10-26',
            'class_days' => 'রবিবার,মঙ্গলবার,বৃহস্পতিবার' ,
            'class_start_time' => '10:00',
            'class_end_time' => '12:00',

        ]);

        CourseBatches::create([
            'course_id' => 2,
            'batch_name' => 'gd-202304',
            'admission_start_date' => '2023-09-25',
            'admission_end_date' => '2023-10-25',
            'batch_student_limit' => 30,
            'seat_booked' => rand(5,10),
            'course_price' => 10000,
            'course_discount' => 30,
            'after_discount_price' => 7000,
            'first_class_date' => '2023-10-26',
            'class_days' => 'রবিবার,মঙ্গলবার,বৃহস্পতিবার' ,
            'class_start_time' => '10:00',
            'class_end_time' => '12:00',

        ]);
    }
}
