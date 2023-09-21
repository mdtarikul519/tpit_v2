<?php

namespace Database\Seeders\Blog;

use App\Models\Blog\BlogCommentReplies;
use Illuminate\Database\Seeder;

class BlogCommentRepliesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BlogCommentReplies::truncate();
        BlogCommentReplies::create([
               'comment'=>'',
        ]);
    }
}
