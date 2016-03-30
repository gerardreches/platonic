<?php

namespace Platonic\Modules\Blog\Database\Seeds;

use Illuminate\Database\Seeder;
use Platonic\Modules\Blog\Models\Comment;

class CommentsTableSeeder extends Seeder
{
    
    public function run()
    {
        factory(Comment::class, 50)->create();
    }

}