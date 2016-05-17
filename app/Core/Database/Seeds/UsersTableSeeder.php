<?php

namespace Platonic\Core\Database\Seeds;

use Creativeorange\Gravatar\Facades\Gravatar;
use Illuminate\Database\Seeder;
use Platonic\Core\Models\User;

class UsersTableSeeder extends Seeder
{
    
    public function run()
    {
    	User::create([
    		'username' => 'admin', 
    		'password' => 'admin', 
    		'email' => 'admin@platonic.com',
    		'profile_picture' => Gravatar::get('admin@platonic.com')
    	]);

        //factory(User::class, 50)->create();
    }

}