<?php

namespace Platonic\Modules\Blog\Database\Seeds;

use Illuminate\Database\Seeder;
use Platonic\Modules\Blog\Models\Post;

class PostsTableSeeder extends Seeder
{
    
    public function run()
    {
        factory(Post::class, 50)->create();
    }

}