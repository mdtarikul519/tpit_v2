<?php

namespace Database\Seeders;

use App\Models\ContactMessage;
use Database\Seeders\Course\CourseBatchSeeder;
use Database\Seeders\Course\CourseCategorySeeder;
use Database\Seeders\Course\CourseCourseCategorySeeder;
use Database\Seeders\Course\CourseEssentialRequirementsSeeder;
use Database\Seeders\Course\CourseFaqsSeeder;
use Database\Seeders\Course\CourseForWhomsSeeder;
use Database\Seeders\Course\CourseInstructorsSeeder;
use Database\Seeders\Course\CoursejobPositionSeeder;
use Database\Seeders\Course\CourseJobWorkSeeder;
use Database\Seeders\Course\CourseModulClassExamsSeeder;
use Database\Seeders\Course\CourseModulClassSeeder;
use Database\Seeders\Course\CourseModulesAtAGlancesSeeder;
use Database\Seeders\Course\CourseModulesSeeder;
use Database\Seeders\Course\CourseModulTaskCompleteByUsersSeeder;
use Database\Seeders\Course\CourseSeeder;
use Database\Seeders\Course\CourseWhatYouWillGetSeeder;
use Database\Seeders\Course\CourseWhyYouLearnFromUsSeeder;
use Database\Seeders\Course\CourseYouWillLearnsSeeder;
use Database\Seeders\Course\CourseModulClassQuizesSeeder;
use Database\Seeders\Course\CourseModulClassResoursesSeeder;
use Database\Seeders\Course\CourseModulClassRoutinesSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            UserSeeder::class,
            ExtraUserSeeder::class,
            ContactMessageSeeder::class,


            CourseBatchSeeder::class,
            CourseCategorySeeder::class,
            CourseCourseCategorySeeder::class,
            CourseEssentialRequirementsSeeder::class,
            CourseFaqsSeeder::class,
            CourseForWhomsSeeder::class,
            CourseInstructorsSeeder::class,
            CoursejobPositionSeeder::class,
            CourseJobWorkSeeder::class,
            CourseModulClassExamsSeeder::class,
            CourseModulClassQuizesSeeder::class,
            CourseModulClassResoursesSeeder::class,
            CourseModulClassRoutinesSeeder::class,
            CourseModulClassSeeder::class,
            CourseModulesAtAGlancesSeeder::class,
            CourseModulesSeeder::class,
            CourseModulTaskCompleteByUsersSeeder::class,
            CourseSeeder::class,
            CourseWhatYouWillGetSeeder::class,
            CourseWhyYouLearnFromUsSeeder::class,
            CourseYouWillLearnsSeeder::class,

        ]);


    }
}
