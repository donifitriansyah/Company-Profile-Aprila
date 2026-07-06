<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Jasa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class JasaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jasas = Jasa::orderBy('urutan')
            ->latest()
            ->paginate(10);

        return view('pages.backend.jasa', compact('jasas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.jasa.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'deskripsi_singkat' => 'nullable|string',
            'deskripsi' => 'required|string',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'harga_mulai' => 'nullable|numeric',
            'satuan_harga' => 'nullable|string|max:100',
            'estimasi_pengerjaan' => 'nullable|string|max:100',
            'kategori' => 'nullable|string|max:100',
            'whatsapp' => 'nullable|string|max:20',
            'urutan' => 'nullable|integer|min:0',
        ]);

        $validated['slug'] = Str::slug($request->nama);

        $validated['unggulan'] = $request->has('unggulan');
        $validated['is_active'] = $request->has('is_active');

        if ($request->hasFile('gambar')) {
            $validated['gambar'] = $request->file('gambar')
                ->store('jasa', 'public');
        }

        Jasa::create($validated);

        return redirect()
            ->route('admin-jasa.index')
            ->with('success', 'Jasa berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Jasa $admin_jasa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Jasa $admin_jasa)
    {
        return view('admin.jasa.edit', [
            'jasa' => $admin_jasa
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Jasa $admin_jasa)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'deskripsi_singkat' => 'nullable|string',
            'deskripsi' => 'required|string',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'harga_mulai' => 'nullable|numeric',
            'satuan_harga' => 'nullable|string|max:100',
            'estimasi_pengerjaan' => 'nullable|string|max:100',
            'kategori' => 'nullable|string|max:100',
            'whatsapp' => 'nullable|string|max:20',
            'urutan' => 'nullable|integer|min:0',
        ]);

        $validated['slug'] = Str::slug($request->nama);

        $validated['unggulan'] = $request->has('unggulan');
        $validated['is_active'] = $request->has('is_active');

        if ($request->hasFile('gambar')) {

            if ($admin_jasa->gambar &&
                Storage::disk('public')->exists($admin_jasa->gambar)) {

                Storage::disk('public')->delete($admin_jasa->gambar);
            }

            $validated['gambar'] = $request->file('gambar')
                ->store('jasa', 'public');
        }

        $admin_jasa->update($validated);

        return redirect()
            ->route('admin-jasa.index')
            ->with('success', 'Jasa berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Jasa $admin_jasa)
    {
        if ($admin_jasa->gambar &&
            Storage::disk('public')->exists($admin_jasa->gambar)) {

            Storage::disk('public')->delete($admin_jasa->gambar);
        }

        $admin_jasa->delete();

        return redirect()
            ->route('admin-jasa.index')
            ->with('success', 'Jasa berhasil dihapus.');
    }
}
