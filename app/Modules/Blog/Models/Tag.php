<?php

namespace Platonic\Modules\Blog\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{

    protected $table = 'blog_tags';

    protected $guarded = [
    	'id',
    	'count'
    ];
    
    public $timestamps = false;

}