<?php

namespace myapp;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public function scores()
    {
        return $this->hasMany(Score::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
