<?php

namespace myapp;

use Illuminate\Database\Eloquent\Model;

class Score extends Model
{
    public function student()
    {
        return $this->belongsTo(Student::class);
    }
}
