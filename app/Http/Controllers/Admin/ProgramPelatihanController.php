<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ProgramPelatihan;
use Illuminate\Http\Request;

class ProgramPelatihanController extends Controller
{
    /**
     * Menampilkan data program pelatihan
     */
    public function index()
    {
        $programPelatihans = ProgramPelatihan::with('details')
            ->latest()
            ->get();

        return view('pages.backend.program-pelatihan.index', compact('programPelatihans'));
    }




    /**
     * Simpan data program pelatihan
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_program'    => 'required|string|max:255',
            'deskripsi'       => 'nullable|string',
            'durasi_jp'       => 'required|integer',
            'tanggal_mulai'   => 'required|date',
            'tanggal_selesai' => 'required|date|after_or_equal:tanggal_mulai',
            'status'          => 'required|boolean',
        ], [
            'nama_program.required' => 'Nama program wajib diisi',
            'durasi_jp.required' => 'Durasi JP wajib diisi',
            'tanggal_mulai.required' => 'Tanggal mulai wajib diisi',
            'tanggal_selesai.required' => 'Tanggal selesai wajib diisi',
            'tanggal_selesai.after_or_equal' => 'Tanggal selesai tidak boleh sebelum tanggal mulai',
        ]);


        ProgramPelatihan::create([
            'nama_program'    => $request->nama_program,
            'deskripsi'       => $request->deskripsi,
            'durasi_jp'       => $request->durasi_jp,
            'tanggal_mulai'   => $request->tanggal_mulai,
            'tanggal_selesai' => $request->tanggal_selesai,
            'status'          => $request->status,
        ]);


        return redirect()
            ->route('program-pelatihan.index')
            ->with('success', 'Program pelatihan berhasil ditambahkan');
    }


    /**
     * Detail program pelatihan
     */
    public function show(int $id)
    {
        $programPelatihan = ProgramPelatihan::with([
            'details',
            'sertifikats'
        ])->findOrFail($id);


        return view('pages.backend.program-pelatihan-detail.index', compact('programPelatihan'));
    }


    /**
     * Update program pelatihan
     */
    public function update(Request $request, int $id)
    {
        $programPelatihan = ProgramPelatihan::findOrFail($id);


        $request->validate([
            'nama_program'    => 'required|string|max:255',
            'deskripsi'       => 'nullable|string',
            'durasi_jp'       => 'required|integer',
            'tanggal_mulai'   => 'required|date',
            'tanggal_selesai' => 'required|date|after_or_equal:tanggal_mulai',
            'status'          => 'required|boolean',
        ]);


        $programPelatihan->update([
            'nama_program'    => $request->nama_program,
            'deskripsi'       => $request->deskripsi,
            'durasi_jp'       => $request->durasi_jp,
            'tanggal_mulai'   => $request->tanggal_mulai,
            'tanggal_selesai' => $request->tanggal_selesai,
            'status'          => $request->status,
        ]);


        return redirect()
            ->route('program-pelatihan.index')
            ->with('success', 'Program pelatihan berhasil diperbarui');
    }


    /**
     * Hapus program pelatihan
     */
    public function destroy(int $id)
    {
        $programPelatihan = ProgramPelatihan::findOrFail($id);


        $programPelatihan->delete();


        return redirect()
            ->route('program-pelatihan.index')
            ->with('success', 'Program pelatihan berhasil dihapus');
    }
}
