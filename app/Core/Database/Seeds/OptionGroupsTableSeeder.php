<?php

namespace Platonic\Core\Database\Seeds;

use Illuminate\Database\Seeder;
use Platonic\Core\Models\OptionGroup;

class OptionGroupsTableSeeder extends Seeder
{
    
    public function run()
    {
        OptionGroup::create(['name' => 'Site CSS']);
    }
}
