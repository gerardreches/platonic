<?php

namespace Platonic\Core\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Hash;

class User extends Authenticatable
{

    protected $table = 'core_users';

    protected $fillable = [
        'username', 'email', 'password', 'display_name', 'profile_picture'
    ];

    protected $hidden = [
        'password', 'active', 'remember_token',
    ];

    public function setPasswordAttribute($password){
        $this->attributes['password'] = Hash::needsRehash($password) ? Hash::make($password) : $password;
    }

}
