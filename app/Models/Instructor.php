<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Instructor extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'position',
        'category',
        'bio',
        'photo',
    ];

    public function courses()
    {
        return $this->belongsToMany(Course::class, 'course_instructor');
    }
}
