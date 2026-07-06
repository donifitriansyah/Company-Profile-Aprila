<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Testimoni;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TestimoniController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $testimonis = Testimoni::orderBy('urutan')
            ->latest()
            ->paginate(10);

        return view('pages.backend.testimoni', compact('testimonis'));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'jabatan' => 'nullable|string|max:255',
            'instansi' => 'nullable|string|max:255',
            'isi_testimoni' => 'required|string',
            'rating' => 'required|integer|min:1|max:5',
            'urutan' => 'nullable|integer|min:0',
            'tanggal_testimoni' => 'nullable|date',
            'is_active' => 'nullable|boolean',
            'foto' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        if ($request->hasFile('foto')) {
            $validated['foto'] = $request->file('foto')->store('testimoni', 'public');
        }

        $validated['is_active'] = $request->has('is_active');

        Testimoni::create($validated);

        return redirect()
            ->route('admin-testimoni.index')
            ->with('success', 'Testimoni berhasil ditambahkan.');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Testimoni $admin_testimoni)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'jabatan' => 'nullable|string|max:255',
            'instansi' => 'nullable|string|max:255',
            'isi_testimoni' => 'required|string',
            'rating' => 'required|integer|min:1|max:5',
            'urutan' => 'nullable|integer|min:0',
            'tanggal_testimoni' => 'nullable|date',
            'is_active' => 'nullable|boolean',
            'foto' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        if ($request->hasFile('foto')) {

            if ($admin_testimoni->foto && Storage::disk('public')->exists($admin_testimoni->foto)) {
                Storage::disk('public')->delete($admin_testimoni->foto);
            }

            $validated['foto'] = $request->file('foto')->store('testimoni', 'public');
        }

        $validated['is_active'] = $request->has('is_active');

        $admin_testimoni->update($validated);

        return redirect()
            ->route('admin-testimoni.index')
            ->with('success', 'Testimoni berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Testimoni $admin_testimoni)
    {
        if ($admin_testimoni->foto && Storage::disk('public')->exists($admin_testimoni->foto)) {
            Storage::disk('public')->delete($admin_testimoni->foto);
        }

        $admin_testimoni->delete();

        return redirect()
            ->route('admin-testimoni.index')
            ->with('success', 'Testimoni berhasil dihapus.');
    }
}
