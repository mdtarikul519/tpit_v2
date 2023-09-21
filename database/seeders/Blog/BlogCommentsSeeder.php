<?php

namespace Database\Seeders\Blog;

use App\Models\Blog\BlogComments;
use App\Models\Blog\BlogsCategories;
use Illuminate\Database\Seeder;

class BlogCommentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      
        BlogComments::truncate();
        BlogComments::create([
               'blog_id'=>'',
               'user_id'=>'',
               'comment'=>'',
               'blogs_creator'=>'',
        ]);
    }
}
