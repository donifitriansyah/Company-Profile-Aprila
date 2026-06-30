<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Berita;
use App\Models\KategoriBerita;

class FrontendBeritaController extends Controller
{
    public function index()
    {
        $berita = Berita::with('kategori')
            ->where('status', 'publish')
            ->whereNotNull('published_at')
            ->orderByDesc('published_at')
            ->paginate(9);

        return view('pages.frontend.berita', compact('berita'));
    }

    public function show($slug)
    {
        $berita = Berita::with([
            'kategori',
            'galeri',
            'user'
        ])
            ->where('slug', $slug)
            ->where('status', 'publish')
            ->firstOrFail();

        $berita->increment('views');

        return view('pages.frontend.detail-berita', compact('berita'));
    }

    public function detailBerita($slug)
    {
        $berita = Berita::with([
            'kategori',
            'user',
            'galeri'
        ])
            ->where('slug', $slug)
            ->where('status', 'publish')
            ->firstOrFail();

        $berita->increment('views');

        $beritaTerbaru = Berita::where('status', 'publish')
            ->where('id', '!=', $berita->id)
            ->latest('published_at')
            ->take(5)
            ->get();

        $kategori = KategoriBerita::withCount([
            'berita as total_berita' => function ($q) {
                $q->where('status', 'publish');
            }
        ])
            ->orderBy('nama')
            ->get();

        return view('pages.frontend.detail-berita', compact(
            'berita',
            'beritaTerbaru',
            'kategori'
        ));
    }
}
