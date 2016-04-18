<?php

namespace Platonic\Core\Database\Seeds;

use Illuminate\Database\Seeder;
use Platonic\Core\Models\User;

class UsersTableSeeder extends Seeder
{
    
    public function run()
    {
        factory(User::class, 50)->create();
    }

}