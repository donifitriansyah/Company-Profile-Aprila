<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\KategoriBerita;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class KategoriBeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kategori = KategoriBerita::latest()->paginate(10);

        return view('pages.backend.kategori-berita', compact('kategori'));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255|unique:kategori_berita,nama',
        ]);

        KategoriBerita::create([
            'nama' => $validated['nama'],
            'slug' => Str::slug($validated['nama']),
        ]);

        return redirect()
            ->route('admin-kategori-berita.index')
            ->with('success', 'Kategori berhasil ditambahkan.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(KategoriBerita $kategori_berita)
    {
        return view('admin.kategori-berita.edit', [
            'kategori' => $kategori_berita
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $kategori_berita = KategoriBerita::findOrFail($id);

        $validated = $request->validate([
            'nama' => 'required|string|max:255|unique:kategori_berita,nama,' . $id,
        ]);

        $kategori_berita->update([
            'nama' => $validated['nama'],
            'slug' => Str::slug($validated['nama']),
        ]);

        return redirect()
            ->route('admin-kategori-berita.index')
            ->with('success', 'Kategori berhasil diubah.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $kategori = KategoriBerita::findOrFail($id);

        if ($kategori->berita()->exists()) {
            return redirect()->back()->with('error', 'Kategori masih digunakan oleh data berita.');
        }

        $kategori->delete();

        return redirect()->back()->with('success', 'Kategori berhasil dihapus.');
    }
}
