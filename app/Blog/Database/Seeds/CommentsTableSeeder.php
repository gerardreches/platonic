<?php

namespace Platonic\Blog\Database\Seeds;

use Illuminate\Database\Seeder;
use Platonic\Blog\Models\Comment;

class CommentsTableSeeder extends Seeder
{
    
    public function run()
    {
        factory(Comment::class, 50)->create();
    }

}