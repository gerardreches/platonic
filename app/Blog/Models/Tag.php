<?php

namespace Platonic\Blog\Models;

use Illuminate\Database\Eloquent\Model;
use Platonic\Blog\Models\Post;

class Tag extends Model
{

    protected $table = 'blog_tags';

    protected $fillable = [
    	'name',
    	'count'
    ];

    public function posts(){
    	return $this->belongsToMany(Post::class, 'blog_post_tag')->withTimestamps();
    }
    /*
    public function list($property){
    	return $this->lists($property);
    }
    */
}