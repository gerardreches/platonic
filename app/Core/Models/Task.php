<?php

namespace Platonic\Core\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
	
    protected $table = 'core_tasks';

    protected $fillable = [
    	'name',
        'completed'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

}
