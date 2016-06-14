<?php

namespace Platonic\Core\Models;

use Illuminate\Database\Eloquent\Model;
use Platonic\Core\Models\Role;

class Permission extends Model
{

    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'core_permissions';

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
    public $timestamps = false;

    /**
     * The attributes that should be mutated to dates.
     * 
     * @var array
     */
    protected $dates = ['created_at'];

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

    public function roles(){
        return $this->belongsToMany(Role::class, 'core_permission_role');
    }

}