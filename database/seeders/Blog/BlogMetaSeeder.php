<?php

namespace Database\Seeders\Blog;

use App\Models\Blog\BlogMeta;
use Illuminate\Database\Seeder;

class BlogMetaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BlogMeta::truncate();
        BlogMeta::create([
               'blog_id'=>'',
               'title'=>'',
               'description'=>'',
               'keywords'=>'',
               'image'=>'',
               'image_alter_text'=>'',
               'image_title'=>'',

        ]);
    }
}
