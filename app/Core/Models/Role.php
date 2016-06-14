<?php

namespace Platonic\Core\Models;

use Illuminate\Database\Eloquent\Model;
use Platonic\Core\Models\Permission;
use Platonic\Core\Models\User;

class Role extends Model
{

    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'core_roles';

    /**
     * The table primary key.
     * 
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * Indicates if the table primary key is an incrementing integer value.
     * 
     * @var bool
     */
    public $incrementing = true;

    /**
     * Indicates if the model should automatically manage timestamps.
     *
     * @var bool
     */
    public $timestamps = true;

    /**
     * The attributes that should be mutated to dates.
     * 
     * @var array
     */
    protected $dates = ['created_at', 'updated_at', 'deleted_at'];

    /**
     * The storage format of the model's date columns.
     *
     * @var string
     */
    protected $dateFormat = 'Y-m-d H:i:s';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [];

    public function users(){
        return $this->belongsToMany(User::class, 'core_role_user');
    }

    public function permissions(){
        return $this->belongsToMany(Permission::class, 'core_permission_role');
    }

    public function grantPermission(Permission $permission){
        return $this->permissions()->save($permission);
    }

    public function hasPermission($permission)
    {
        if(is_string($permission)){
            return $this->permissions->contains('name', $permission);
        }

        return !! $permission->intersect($this->permissions)->count();
    }

}