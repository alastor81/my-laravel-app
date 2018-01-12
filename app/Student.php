<?php

namespace myapp;

use Illuminate\Database\Eloquent\Model;

/**
 * myapp\Student
 *
 * @property-read \Illuminate\Database\Eloquent\Collection|\myapp\Score[] $scores
 * @property-read \myapp\User $user
 * @mixin \Eloquent
 * @property int $id
 * @property int $user_id
 * @property string $name
 * @property string $class
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\myapp\Student whereClass($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\myapp\Student whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\myapp\Student whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\myapp\Student whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\myapp\Student whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\myapp\Student whereUserId($value)
 */
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

    public function classroom()
    {
        return $this->belongsTo(Classroom::class);
    }
}
