<?php

namespace Platonic\Blog\Models;

use Illuminate\Database\Eloquent\Model;
use Platonic\Core\Models\User;

class Comment extends Model
{
    protected $table = 'blog_comments';

    protected $guarded = [
    	'id',
    	'timestamps'
    ];

    public function user(){
    	return $this->belongsTo(User::class);
    }

    // If you want to change the date format for the timestamps
    //protected $dateFormat = 'Y-m-d H:i:s';
}
