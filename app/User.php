<?php

namespace myapp;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

/**
 * myapp\User
 *
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read \Illuminate\Database\Eloquent\Collection|\myapp\Student[] $students
 * @mixin \Eloquent
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $password
 * @property string|null $remember_token
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\myapp\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\myapp\User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\myapp\User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\myapp\User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\myapp\User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\myapp\User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\myapp\User whereUpdatedAt($value)
 */
class User extends Authenticatable
{
    use Notifiable;

    public function students()
    {
        return $this->hasMany(Student::class);
    }


    public function classrooms()
    {
        return $this->hasMany(Classroom::class);
    }

    public function lessons()
    {
        return $this->hasMany(Lesson::class);
    }
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
