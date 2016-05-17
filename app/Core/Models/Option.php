<?php

namespace Platonic\Core\Models;

use Illuminate\Database\Eloquent\Model;
use Platonic\Core\Models\OptionGroup;

class Option extends Model
{
    protected $table = 'core_options';

    protected $fillable = [
    	'name',
        'value',
        'group_id'
    ];

    public function group(){
    	return $this->belongsTo(OptionGroup::class);
    }
}
