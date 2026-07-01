<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Award;
use App\Models\Berita;
use App\Models\Course;
use App\Models\Instructor;

class HomeController extends Controller
{
    public function index()
    {
        $beritaTerbaru = Berita::with('kategori')
            ->where('status', 'publish')
            ->latest()
            ->take(3)
            ->get();
        $courses = Course::latest()->get();
        $teams = Instructor::where('category', 'tim')
            ->orderBy('id', 'asc')
            ->get();
        $awards = Award::where('is_active', 1)
        ->orderBy('order', 'asc')
        ->get();

        return view('welcome', compact('beritaTerbaru', 'courses', 'teams','awards'));
    }
}
