<?php

namespace Platonic\Core\Database\Seeds;

use Illuminate\Database\Seeder;
use Platonic\Core\Models\Role;
use Platonic\Core\Models\User;

class RoleUserTableSeeder extends Seeder
{
    
    public function run()
    {
        User::findOrFail(1)->roles()->attach([1]);
    }
}
