<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Berita;

class HomeController extends Controller
{
    public function index()
    {
        $beritaTerbaru = Berita::with('kategori')
            ->where('status', 'publish')
            ->latest()
            ->take(3)
            ->get();
        return view('welcome', compact('beritaTerbaru'));
    }
}
