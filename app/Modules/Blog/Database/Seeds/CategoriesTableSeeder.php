<?php

namespace Platonic\Modules\Blog\Database\Seeds;

use Illuminate\Database\Seeder;
use Platonic\Modules\Blog\Models\Category;

class CategoriesTableSeeder extends Seeder
{
    
    public function run()
    {
        factory(Category::class, 50)->create();
    }

}