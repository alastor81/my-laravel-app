<?php

namespace myapp;

use Illuminate\Database\Eloquent\Model;

/**
 * myapp\Classroom
 *
 * @mixin \Eloquent
 */
class Classroom extends Model
{
    public function user()
    {
        return $this->belongsTo(Student::class);
    }
}
