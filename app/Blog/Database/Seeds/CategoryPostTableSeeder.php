<?php

namespace Platonic\Blog\Database\Seeds;

use Illuminate\Database\Seeder;
use Platonic\Blog\Models\CategoryPost;

class CategoryPostTableSeeder extends Seeder
{
    
    public function run()
    {
        factory(CategoryPost::class, 50)->create();
    }

}