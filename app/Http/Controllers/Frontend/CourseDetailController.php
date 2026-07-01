<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;

class CourseDetailController extends Controller
{
    /**
     * DETAIL COURSE
     */
    public function show($id)
    {
        $course = Course::with([
            'overview',
            'curriculums',
            'instructors',
            'reviews'
        ])->findOrFail($id);

        return view('pages.frontend.detail-kursus', compact('course'));
    }
}
