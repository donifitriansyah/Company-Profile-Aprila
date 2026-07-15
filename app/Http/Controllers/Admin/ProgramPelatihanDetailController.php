<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ProgramPelatihan;
use App\Models\ProgramPelatihanDetail;
use Illuminate\Http\Request;

class ProgramPelatihanDetailController extends Controller
{
    /**
     * Menampilkan daftar detail program
     */
    public function index(int $program_pelatihan_id)
    {
        $program = ProgramPelatihan::findOrFail($program_pelatihan_id);

        $details = ProgramPelatihanDetail::where('program_pelatihan_id', $program_pelatihan_id)
            ->orderBy('urutan')
            ->get();

        return view('pages.backend.program-pelatihan-detail.index', compact(
            'program',
            'details'
        ));
    }


    /**
     * Form tambah detail
     */
    public function create(int $program_pelatihan_id)
    {
        $program = ProgramPelatihan::findOrFail($program_pelatihan_id);

        return view('program_pelatihan_detail.create', compact('program'));
    }


    /**
     * Simpan detail program
     */
    public function store(Request $request)
    {
        $request->validate([
            'program_pelatihan_id' => 'required|exists:program_pelatihans,id',
            'urutan'               => 'required|integer',
            'nama_unit'            => 'required|string|max:255',
            'jumlah_jp'            => 'required|integer',
        ], [
            'nama_unit.required' => 'Nama unit wajib diisi',
            'jumlah_jp.required' => 'Jumlah JP wajib diisi',
        ]);


        ProgramPelatihanDetail::create([
            'program_pelatihan_id' => $request->program_pelatihan_id,
            'urutan'               => $request->urutan,
            'nama_unit'            => $request->nama_unit,
            'jumlah_jp'            => $request->jumlah_jp,
        ]);

        return redirect()
            ->route('program-detail.index', $request->program_pelatihan_id)
            ->with('success', 'Detail program berhasil ditambahkan');
    }


    /**
     * Menampilkan detail
     */
    public function show(int $id)
    {
        $detail = ProgramPelatihanDetail::findOrFail($id);

        return view('program_pelatihan_detail.show', compact('detail'));
    }


    /**
     * Form edit detail
     */
    public function edit(int $id)
    {
        $detail = ProgramPelatihanDetail::findOrFail($id);

        return view('program_pelatihan_detail.edit', compact('detail'));
    }


    /**
     * Update detail
     */
    public function update(Request $request, int $id)
    {
        $detail = ProgramPelatihanDetail::findOrFail($id);


        $request->validate([
            'urutan'    => 'required|integer',
            'nama_unit' => 'required|string|max:255',
            'jumlah_jp' => 'required|integer',
        ], [
            'nama_unit.required' => 'Nama unit wajib diisi',
            'jumlah_jp.required' => 'Jumlah JP wajib diisi',
        ]);


        $detail->update([
            'urutan'    => $request->urutan,
            'nama_unit' => $request->nama_unit,
            'jumlah_jp' => $request->jumlah_jp,
        ]);


        return redirect()
            ->route('program-detail.index', $detail->program_pelatihan_id)
            ->with('success', 'Detail program berhasil diperbarui');
    }


    /**
     * Hapus detail
     */
    public function destroy(int $id)
    {
        $detail = ProgramPelatihanDetail::findOrFail($id);

        $program_id = $detail->program_pelatihan_id;

        $detail->delete();


        return redirect()
            ->route('program-detail.index', $program_id)
            ->with('success', 'Detail program berhasil dihapus');
    }
}
