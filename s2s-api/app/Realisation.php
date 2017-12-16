<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Realisation extends Model
{
    protected $fillable = [
        'title',
        'description',
        'student_id',
    ];

    public function student()
    {
        return $this->hasOne('App\Student');
    }
}
