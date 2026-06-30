<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Berita;
use App\Models\KategoriBerita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class BeritaController extends Controller
{
    public function index()
    {
        $berita = Berita::with([
            'kategori',
            'user'
        ])->latest()->get();

        $kategori = KategoriBerita::orderBy('nama')->get();

        return view('pages.backend.berita.index', compact(
            'berita',
            'kategori'
        ));
    }


    public function store(Request $request)
    {
        $request->validate([
            'kategori_id'      => 'required|exists:kategori_berita,id',
            'judul'            => 'required|max:255',
            'ringkasan'        => 'nullable|max:500',
            'isi'              => 'required',
            'thumbnail'        => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'status'           => 'required|in:draft,publish',
            'published_at'     => 'nullable|date',
            'meta_title'       => 'nullable|max:255',
            'meta_description' => 'nullable|max:255',
            'is_featured'      => 'nullable|boolean',
        ]);

        $thumbnail = null;

        if ($request->hasFile('thumbnail')) {
            $thumbnail = $request->file('thumbnail')->store('berita', 'public');
        }

        Berita::create([
            'kategori_id'     => $request->kategori_id,
            'user_id'         => Auth::id(),
            'judul'           => $request->judul,
            'slug'            => $this->generateUniqueSlug($request->judul),
            'thumbnail'       => $thumbnail,
            'ringkasan'       => $request->ringkasan,
            'isi'             => $request->isi,
            'status'          => $request->status,
            'published_at'    => $request->published_at,
            'is_featured'     => $request->boolean('is_featured'),
            'meta_title'      => $request->meta_title,
            'meta_description' => $request->meta_description,
        ]);

        return redirect()
            ->route('admin-berita.index')
            ->with('success', 'Berita berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $berita = Berita::findOrFail($id);

        $kategori = KategoriBerita::orderBy('nama')->get();

        return view('pages.backend.berita.edit', compact('berita', 'kategori'));
    }

    public function create()
    {
        $kategori = KategoriBerita::orderBy('nama')->get();

        return view('pages.backend.berita.create', compact('kategori'));
    }



    public function update(Request $request, $id)
    {
        $berita = Berita::findOrFail($id);

        $request->validate([
            'kategori_id'      => 'required|exists:kategori_berita,id',
            'judul'            => 'required|max:255',
            'ringkasan'        => 'nullable|max:500',
            'isi'              => 'required',
            'thumbnail'        => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'status'           => 'required|in:draft,publish',
            'published_at'     => 'nullable|date',
            'meta_title'       => 'nullable|max:255',
            'meta_description' => 'nullable|max:255',
            'is_featured'      => 'nullable|boolean',
        ]);

        $thumbnail = $berita->thumbnail;

        if ($request->hasFile('thumbnail')) {

            if ($thumbnail && Storage::disk('public')->exists($thumbnail)) {
                Storage::disk('public')->delete($thumbnail);
            }

            $thumbnail = $request->file('thumbnail')->store('berita', 'public');
        }

        $berita->update([
            'kategori_id'      => $request->kategori_id,
            'judul'            => $request->judul,
            'slug'             => $this->generateUniqueSlug($request->judul, $berita->id),
            'thumbnail'        => $thumbnail,
            'ringkasan'        => $request->ringkasan,
            'isi'              => $request->isi,
            'status'           => $request->status,
            'published_at'     => $request->published_at,
            'is_featured'      => $request->boolean('is_featured'),
            'meta_title'       => $request->meta_title,
            'meta_description' => $request->meta_description,
        ]);

        return redirect()
            ->route('admin-berita.index')
            ->with('success', 'Berita berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $berita = Berita::findOrFail($id);

        if ($berita->thumbnail && Storage::disk('public')->exists($berita->thumbnail)) {
            Storage::disk('public')->delete($berita->thumbnail);
        }

        $berita->delete();

        return redirect()
            ->back()
            ->with('success', 'Berita berhasil dihapus.');
    }

    private function generateUniqueSlug($judul, $id = null)
    {
        $slug = Str::slug($judul);
        $originalSlug = $slug;

        $count = 1;

        while (
            Berita::where('slug', $slug)
            ->when($id, function ($query) use ($id) {
                $query->where('id', '!=', $id);
            })
            ->exists()
        ) {
            $slug = $originalSlug . '-' . $count++;
        }

        return $slug;
    }
}
