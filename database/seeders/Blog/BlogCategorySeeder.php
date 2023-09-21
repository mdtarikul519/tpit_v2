<?php

namespace Database\Seeders\Blog;

use App\Models\Blog\BlogsCategories;
use Illuminate\Database\Seeder;

class BlogCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        BlogsCategories::truncate();
        BlogsCategories::create([
            'title' => 'শুধু বাবরকে দোষারোপ করা হচ্ছে কেন?',
            'image' => 'uplodes/blog/babr.png',

        ]);

        BlogsCategories::create([
            'title' => 'বিশ্বকাপের থিম সং নিয়ে এত সমালোচনা কেন?',
            'image' => 'uplodes/blog/babr.png',

        ]);

        BlogsCategories::create([
            'title' => 'আগামী নির্বাচনে পূর্ণাঙ্গ পর্যবেক্ষক দল পাঠাবে না ইউরোপীয় ইউনিয়ন',
            'image' => 'uplodes/blog/eeu.png',

        ]);
    }
}
