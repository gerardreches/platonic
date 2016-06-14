<?php

namespace Platonic\Core\Database\Seeds;

use Illuminate\Database\Seeder;
use Platonic\Core\Models\Option;

class OptionsTableSeeder extends Seeder
{
    
    public function run()
    {

        Option::create([
        	'name' => 'site-url', 
        	'value' => 'http://localhost',
        	'label' => 'Site URL',
        	'description' => 'Specify the domain URL.',
        	'group_id' => 1
        ]);

        Option::create([
        	'name' => 'users-registration', 
        	'value' => 'false',
        	'label' => 'Allow new users registration',
        	'description' => 'Set to <i>true</i> to allow or set to <i>false</i> to disallow.',
        	'group_id' => 1
        ]);

        Option::create([
        	'name' => 'login-background-image', 
        	'value' => '"http://tamiltutorials.in/wp-content/uploads/2014/12/Light-green-website-plain-background.jpg"',
        	'label' => 'Login page background image',
        	'description' => 'Image URL for the login page background.',
        	'group_id' => 2
        ]);


    }
}