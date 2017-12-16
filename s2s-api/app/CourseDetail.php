<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CourseDetail extends Model
{
    protected $fillable = [
        'title',
        'description',
        'course_id',
    ];

    public function course()
    {
        return $this->hasOne('App\Course');
    }
}
