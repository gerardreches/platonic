<?php

namespace Platonic\Core\Database\Seeds;

use Illuminate\Database\Seeder;
use Platonic\Core\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    
    public function run()
    {
        Permission::create([
        	'name' => 'edit-users'
        ]);
    }
}
