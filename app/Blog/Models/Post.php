<?php

namespace Platonic\Blog\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Platonic\Core\Models\User;

class Post extends Model
{

	use SoftDeletes;

	protected $dates = ['deleted_at'];
	
	// Referenced table name. By default it takes the plural lowercase name of the class.
    protected $table = 'blog_posts';

    // Not mass assignable table columns.
    protected $guarded = [
    	'id',
    	'user_id',
    	'timestamps'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    // If you want to override the default primary key.
    //$primaryKey = 'id';

    // Set to false if the primary key isn't an incrementing integer value.
    //$incrementing = false;

    // Uncomment this if the table is not using timestamps.
    //public $timestamps = false;
    // If you want to change the date format for the timestamps
    //protected $dateFormat = 'Y-m-d H:i:s';
}
