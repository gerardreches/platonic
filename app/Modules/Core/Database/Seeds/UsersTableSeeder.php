<?php

namespace Platonic\Modules\Core\Database\Seeds;

use Illuminate\Database\Seeder;
use Platonic\Modules\Core\Models\User;

class UsersTableSeeder extends Seeder
{
    
    public function run()
    {
        factory(User::class, 50)->create();
    }

}