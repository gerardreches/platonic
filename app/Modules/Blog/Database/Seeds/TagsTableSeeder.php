<?php

namespace Platonic\Modules\Blog\Database\Seeds;

use Illuminate\Database\Seeder;
use Platonic\Modules\Blog\Models\Tag;

class TagsTableSeeder extends Seeder
{
    
    public function run()
    {
        factory(Tag::class, 50)->create();
    }

}