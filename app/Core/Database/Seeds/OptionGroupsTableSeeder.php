<?php

namespace Platonic\Core\Database\Seeds;

use Illuminate\Database\Seeder;
use Platonic\Core\Models\OptionGroup;

class OptionGroupsTableSeeder extends Seeder
{
    
    public function run()
    {
        OptionGroup::create([
        	'name' => 'Site options',
        	'description' => 'Options for site configuration'
        ]);

        OptionGroup::create([
        	'name' => 'Site CSS',
        	'description' => 'Custom CSS values used to customize the site CSS'
        ]);
    }
}
