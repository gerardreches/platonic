<?php

namespace Platonic\Core\Database\Seeds;

use Illuminate\Database\Seeder;
use Platonic\Core\Models\Role;

class RolesTableSeeder extends Seeder
{
    
    public function run()
    {
        Role::create([
        	'name' => 'Administrator'
        ]);

        Role::create([
        	'name' => 'Editor'
        ]);

        Role::create([
            'name' => 'Autor'
        ]);

        Role::create([
            'name' => 'Collaborator'
        ]);

        Role::create([
            'name' => 'Subscriber'
        ]);
    }
}
