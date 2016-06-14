<?php

namespace Platonic\Core\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Hash;
use Platonic\Core\Models\Role;

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

    public function roles(){
        return $this->belongsToMany(Role::class, 'core_role_user');
    }

    public function assignRole($role){
        return $this->roles()->save(
            Role::whereName($role)->firstOrFail()
        );
    }

    public function removeRole($role){
        return $this->roles()->delete(
            Role::whereName($role)->firstOrFail()
        );
    }

    public function hasRole($role){
        if(is_string($role)){
            return $this->roles->contains('name', $role);
        }

        return !! $role->intersect($this->roles)->count();
    }

    public function hasPermission($permission)
    {
        foreach($this->roles as $role){
            if ($role->hasPermission($permission)) {
                return true;
            }
        }

        return false;
    }

}
