<?php

namespace Platonic\Modules\Blog\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'blog_comments';

    protected $guarded = [
    	'id',
    	'timestamps'
    ];

    // If you want to change the date format for the timestamps
    //protected $dateFormat = 'Y-m-d H:i:s';
}
