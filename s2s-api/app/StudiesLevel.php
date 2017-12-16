<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudiesLevel extends Model
{
    protected $fillable = [
        'name',
    ];

    public function students()
    {
        return $this->hasMany('App\Student');
    }

    public function sectors()
    {
        return $this->hasMany('App\Sector');
    }
}
