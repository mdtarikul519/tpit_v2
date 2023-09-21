<?php

namespace Database\Seeders\Blog;

use App\Models\Blog\Blogs;
use Illuminate\Database\Seeder;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Blogs::truncate();
        Blogs::create([
               'blog_id'=>'',
               'device_ip'=>'',
               'blogs_creator'=>'',
        ]);
    }
}
