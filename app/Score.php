<?php

namespace myapp;

use Illuminate\Database\Eloquent\Model;

/**
 * myapp\Score
 *
 * @property-read \myapp\Student $student
 * @mixin \Eloquent
 * @property int $id
 * @property int $student_id
 * @property string $lesson
 * @property float $score
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\myapp\Score whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\myapp\Score whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\myapp\Score whereLesson($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\myapp\Score whereScore($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\myapp\Score whereStudentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\myapp\Score whereUpdatedAt($value)
 */
class Score extends Model
{
    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    public function lessons()
    {
        return $this->hasMany(Lesson::class);
    }
}
