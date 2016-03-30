<?php

namespace Platonic\Modules\Blog\Database\Seeds;

use Illuminate\Database\Seeder;
use Platonic\Modules\Blog\Models\CategoryPost;

class CategoryPostTableSeeder extends Seeder
{
    
    public function run()
    {
        factory(CategoryPost::class, 50)->create();
    }

}