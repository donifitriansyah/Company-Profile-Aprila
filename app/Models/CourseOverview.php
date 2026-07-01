<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseOverview extends Model
{
    use HasFactory;

    protected $fillable = [
        'course_id',
        'content',
        'video_url',
    ];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
