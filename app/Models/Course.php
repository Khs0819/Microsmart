<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Course extends Model
{
    use HasFactory;
    public function CoursesUsers()
    {
        return $this->belongsTo(CoursesUsers::class, 'course_id', 'id');
    }
    public function program()
    {
        return $this->belongsTo(Program::class, 'program_id', 'id');
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'courses_users', 'course_id', 'user_id', 'id', 'id');
    }

    protected static function boot()
    {
        parent::boot();

        static::deleting(function ($course) {
            $course->users()->delete();
        });
    }
}
