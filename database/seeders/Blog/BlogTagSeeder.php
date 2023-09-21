<?php

namespace Database\Seeders\Blog;

use App\Models\Blog\BlogTags;
use Illuminate\Database\Seeder;

class BlogTagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BlogTags::truncate();
        BlogTags::create([
               'title'=>'',
               
        ]);
    }
}
