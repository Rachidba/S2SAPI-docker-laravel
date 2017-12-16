<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    protected $fillable = [
        'skill_name',
    ];

    public function students()
    {
        return $this->belongsToMany('App\Student');
    }
    
}
