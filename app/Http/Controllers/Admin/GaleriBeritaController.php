<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Berita;
use App\Models\GaleriBerita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;

class GaleriBeritaController extends Controller
{
    public function index($beritaId)
    {
        $berita = Berita::findOrFail($beritaId);

        $galeri = GaleriBerita::where('berita_id', $beritaId)
            ->orderBy('urutan')
            ->get();

        $nextUrutan = GaleriBerita::where('berita_id', $beritaId)
            ->max('urutan');

        $nextUrutan = $nextUrutan ? $nextUrutan + 1 : 1;

        return view(
            'pages.backend.galeri-berita.index',
            compact('berita', 'galeri', 'nextUrutan')
        );
    }

    public function store(Request $request)
    {
        $request->validate([
            'berita_id' => 'required|exists:berita,id',
            'gambar' => 'required|image|mimes:jpg,jpeg,png,webp|max:2048',
            'caption' => 'nullable|string|max:255',
            'urutan' => [
                'required',
                'integer',
                Rule::unique('galeri_berita')
                    ->where(fn($q) => $q->where('berita_id', $request->berita_id)),
            ],
        ], [
            'urutan.unique' => 'Nomor urutan sudah digunakan pada berita ini.',
        ]);

        $gambar = $request->file('gambar')->store('galeri-berita', 'public');

        GaleriBerita::create([
            'berita_id' => $request->berita_id,
            'gambar' => $gambar,
            'caption' => $request->caption,
            'urutan' => $request->urutan,
        ]);

        return back()->with('success', 'Gambar berhasil ditambahkan.');
    }

    public function update(Request $request, $id)
    {
        $galeri = GaleriBerita::findOrFail($id);

        $request->validate([
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'caption' => 'nullable|string|max:255',
            'urutan' => [
                'required',
                'integer',
                Rule::unique('galeri_berita')
                    ->where(fn($q) => $q->where('berita_id', $galeri->berita_id))
                    ->ignore($galeri->id),
            ],
        ], [
            'urutan.unique' => 'Nomor urutan sudah digunakan pada berita ini.',
        ]);

        if ($request->hasFile('gambar')) {

            if ($galeri->gambar && Storage::disk('public')->exists($galeri->gambar)) {
                Storage::disk('public')->delete($galeri->gambar);
            }

            $galeri->gambar = $request->file('gambar')->store('galeri-berita', 'public');
        }

        $galeri->caption = $request->caption;
        $galeri->urutan = $request->urutan;

        $galeri->save();

        return back()->with('success', 'Galeri berhasil diperbarui.');
    }
    public function destroy($id)
    {
        $galeri = GaleriBerita::findOrFail($id);

        if ($galeri->gambar && Storage::disk('public')->exists($galeri->gambar)) {
            Storage::disk('public')->delete($galeri->gambar);
        }

        $galeri->delete();

        return back()->with('success', 'Galeri berhasil dihapus.');
    }

    public function create($beritaId)
    {
        $berita = Berita::findOrFail($beritaId);

        return view('pages.backend.galeri-berita.create', compact('berita'));
    }

    public function edit($id)
    {
        $galeri = GaleriBerita::with('berita')->findOrFail($id);

        return view('pages.backend.galeri-berita.edit', compact('galeri'));
    }
}
