<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = [
        'title',
        'subject_id',
    ];

    public function subject()
    {
        return $this->hahasOne('App\Subject');
    }
}
