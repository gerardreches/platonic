<?php

namespace Platonic\Core\Database\Seeds;

use Illuminate\Database\Seeder;
use Platonic\Core\Models\Option;

class OptionsTableSeeder extends Seeder
{
    
    public function run()
    {
        Option::create(['name' => 'login-background-image', 'value' => '"http://tamiltutorials.in/wp-content/uploads/2014/12/Light-green-website-plain-background.jpg"', 'group_id' => 1]);
    }
}
