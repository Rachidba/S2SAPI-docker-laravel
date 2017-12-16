<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'first_name',
        'last_name',
        'year',
        'studies_level_id',
    ];

    public function realisations()
    {
        return $this->hasMany('App\Realisation');
    }

    public function studiesLevel()
    {
        return $this->hasOne('App\StudiesLevel');
    }

    public function sector()
    {
        return $this->hasOne('App\Sector');
    }

    public function skills()
    {
        return $this->belongsToMany('App\Skill');
    }
}