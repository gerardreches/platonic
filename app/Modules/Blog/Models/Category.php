<?php

namespace Platonic\Modules\Blog\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'blog_categories';

    protected $guarded = [
    	'id'
    ];

    public $timestamps = false;
}
