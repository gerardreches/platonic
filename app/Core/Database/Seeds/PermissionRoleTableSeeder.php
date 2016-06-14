<?php

namespace Platonic\Core\Database\Seeds;

use Illuminate\Database\Seeder;
use Platonic\Core\Models\Permission;

class PermissionRoleTableSeeder extends Seeder
{
    
    public function run()
    {
        Permission::where('name', '=', 'edit-users')->firstOrFail()->roles()->attach([1]);
    }
}
