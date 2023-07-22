<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    use HasFactory;
    public function courses()
    {
        return $this->hasMany(Course::class, 'program_id', 'id');
    }

    protected static function boot()
    {
        parent::boot();

        static::deleting(function ($program) {
            $program->courses()->delete();
        });
    }
}
