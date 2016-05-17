<?php

namespace Platonic\Core\Models;

use Illuminate\Database\Eloquent\Model;
use Platonic\Core\Models\Option;

class OptionGroup extends Model
{
    protected $table = 'core_option_groups';

    protected $fillable = [
    	'name'
    ];

    public $timestamps = false;

    public function options(){
    	return $this->hasMany(Option::class, 'group_id');
    }

    public function scopeFindByName($query, $name)
    {
        return $query->where('name', '=', $name);
    }
}
