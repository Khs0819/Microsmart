<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CoursesUsers extends Model
{
    use HasFactory;


    public function courses()
    {
        return $this->hasMany(Course::class, 'course_id', 'id');
    }

    public function users()
    {
        return $this->hasMany(User::class, 'user_id', 'id');
    }

    protected static function boot()
    {
        parent::boot();

        static::deleting(function ($coursesusers) {
            $coursesusers->courses()->delete();
        });
        static::deleting(function ($userscourses) {
            $userscourses->users()->delete();
        });
    }
}
