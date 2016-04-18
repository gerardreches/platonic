<?php

namespace Platonic\Blog\Database\Seeds;

use Illuminate\Database\Seeder;
use Platonic\Blog\Models\Tag;

class TagsTableSeeder extends Seeder
{
    
    public function run()
    {
        factory(Tag::class, 50)->create();
    }

}
