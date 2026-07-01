<?php

namespace App\Models;

use App\Models\CourseCurriculum;
use App\Models\CourseOverview;
use App\Models\Instructor;
use App\Models\Review;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'image',
        'category',
        'start_date',
        'duration_days',
        'seat_available',
        'price',
    ];

    public function overview()
    {
        return $this->hasOne(CourseOverview::class);
    }

    public function curriculums()
    {
        return $this->hasMany(CourseCurriculum::class)->orderBy('order');
    }

    public function instructors()
    {
        return $this->belongsToMany(Instructor::class, 'course_instructor');
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
}
