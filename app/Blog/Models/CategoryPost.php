<?php

namespace Platonic\Blog\Models;

use Illuminate\Database\Eloquent\Model;

class CategoryPost extends Model
{

    protected $table = 'blog_category_post';

    protected $guarded = [
        
    ];

    // If you want to override the default primary key.
    //$primaryKey = 'id';

    //$incrementing = false;

    public $timestamps = false;
}
