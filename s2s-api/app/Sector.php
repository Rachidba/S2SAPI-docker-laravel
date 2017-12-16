<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sector extends Model
{
    protected $fillable = [
        'name',
        'studies_level_id'
    ];

    public function StudiesLevel()
    {
        return $this->hasOne('App\StudiesLevel');
    }
}
