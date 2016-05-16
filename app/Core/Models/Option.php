<?php

namespace Platonic\Core\Models;

use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
    protected $table = 'core_options';

    protected $fillable = [
    	'name',
        'completed'
    ];
}
