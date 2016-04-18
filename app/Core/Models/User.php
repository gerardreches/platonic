<?php

namespace Platonic\Core\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'core_users';

    protected $guarded = [
    	'id',
    	'user_id',
    	'timestamps'
    ];

    // If you want to change the date format for the timestamps
    //protected $dateFormat = 'Y-m-d H:i:s';
}
