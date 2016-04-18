<?php

namespace Platonic\Blog\Database\Seeds;

use Illuminate\Database\Seeder;
use Platonic\Blog\Models\Category;

class CategoriesTableSeeder extends Seeder
{
    
    public function run()
    {
        factory(Category::class, 50)->create();
    }

}