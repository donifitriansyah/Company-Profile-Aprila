<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Peserta;
use Illuminate\Http\Request;

class PesertaController extends Controller
{
    public function index()
    {
        $pesertas = Peserta::latest()->paginate(10);

        return view('pages.backend.peserta.index', compact('pesertas'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_lengkap' => 'required|string|max:255',
            'nik'          => 'nullable|string|max:20',
            'email'        => 'nullable|email|max:255',
            'no_hp'        => 'required|string|max:20',
            'alamat'       => 'nullable|string',
        ], [
            'nama_lengkap.required' => 'Nama lengkap wajib diisi',
            'no_hp.required' => 'Nomor HP wajib diisi',
            'email.email' => 'Format email tidak valid',
        ]);

        Peserta::create([
            'nama_lengkap' => $request->nama_lengkap,
            'nik'          => $request->nik,
            'email'        => $request->email,
            'no_hp'        => $request->no_hp,
            'alamat'       => $request->alamat,
        ]);


        return redirect()
            ->route('peserta.index')
            ->with('success', 'Data peserta berhasil ditambahkan');
    }

    public function edit(Peserta $peserta)
    {
        return view('backend.peserta.edit', compact('peserta'));
    }

    public function update(Request $request, $id)
    {
        $peserta = Peserta::findOrFail($id);

        $request->validate([
            'nama_lengkap' => 'required|string|max:255',
            'nik'          => 'nullable|string|max:20',
            'email'        => 'nullable|email|max:255',
            'no_hp'        => 'required|string|max:20',
            'alamat'       => 'nullable|string',
        ], [
            'nama_lengkap.required' => 'Nama lengkap wajib diisi',
            'no_hp.required' => 'Nomor HP wajib diisi',
            'email.email' => 'Format email tidak valid',
        ]);


        $peserta->update([
            'nama_lengkap' => $request->nama_lengkap,
            'nik'          => $request->nik,
            'email'        => $request->email,
            'no_hp'        => $request->no_hp,
            'alamat'       => $request->alamat,
        ]);


        return redirect()
            ->route('peserta.index')
            ->with('success', 'Data peserta berhasil diperbarui');
    }

    public function destroy($id)
    {
        $peserta = Peserta::findOrFail($id);

        $peserta->delete();

        return redirect()
            ->route('peserta.index')
            ->with('success', 'Data peserta berhasil dihapus');
    }
}
