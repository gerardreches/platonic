<?php

namespace Platonic\Modules\Blog\Database\Seeds;

use Illuminate\Database\Seeder;
use Platonic\Modules\Blog\Models\PostTag;

class PostTagTableSeeder extends Seeder
{
    
    public function run()
    {
        factory(PostTag::class, 50)->create();
    }

}