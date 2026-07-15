<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Sertifikat;
use App\Models\Peserta;
use App\Models\ProgramPelatihan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Barryvdh\DomPDF\Facade\Pdf;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class SertifikatController extends Controller
{

    public function viewSertifikat(int $id)
    {
        $sertifikat = Sertifikat::with([
            'peserta',
            'programPelatihan'
        ])
            ->findOrFail($id);


        $url = route(
            'sertifikat.validasi',
            $sertifikat->uuid
        );


        return view(
            'pages.backend.sertifikat.cetak',
            compact(
                'sertifikat',
                'url'

            )
        );
    }
    /**
     * Halaman data sertifikat
     */
    public function index()
    {
        $sertifikats = Sertifikat::with([
            'peserta',
            'programPelatihan'
        ])
            ->latest()
            ->get();


        $pesertas = Peserta::orderBy('nama_lengkap')
            ->get();


        $programPelatihans = ProgramPelatihan::orderBy('nama_program')
            ->get();


        return view('pages.backend.sertifikat.index', compact(
            'sertifikats',
            'pesertas',
            'programPelatihans'
        ));
    }



    /**
     * Simpan sertifikat
     */
    public function store(Request $request)
    {

        $request->validate([

            'peserta_id' => [
                'required',
                'exists:pesertas,id'
            ],

            'program_pelatihan_id' => [
                'required',
                'exists:program_pelatihans,id'
            ],

            'nomor_sertifikat' => [
                'required',
                'string',
                'max:255'
            ],

            'tanggal_terbit' => [
                'required',
                'date'
            ],

            'kota_terbit' => [
                'required',
                'string',
                'max:100'
            ],

            'file_pdf' => [
                'nullable',
                'mimes:pdf',
                'max:2048'
            ],

            'status' => [
                'required'
            ],

        ]);



        $data = [

            'peserta_id' => $request->peserta_id,

            'program_pelatihan_id' =>
            $request->program_pelatihan_id,

            'nomor_sertifikat' =>
            $request->nomor_sertifikat,

            'tanggal_terbit' =>
            $request->tanggal_terbit,

            'kota_terbit' =>
            $request->kota_terbit,

            'status' =>
            $request->status,

        ];



        if ($request->hasFile('file_pdf')) {

            $data['file_pdf'] =
                $request->file('file_pdf')
                ->store('sertifikat', 'public');
        }



        Sertifikat::create($data);



        return redirect()
            ->route('sertifikat.index')
            ->with(
                'success',
                'Sertifikat berhasil ditambahkan'
            );
    }





    /**
     * Update sertifikat
     */
    public function update(Request $request, int $id)
    {

        $sertifikat =
            Sertifikat::findOrFail($id);



        $request->validate([

            'peserta_id' =>
            'required|exists:pesertas,id',

            'program_pelatihan_id' =>
            'required|exists:program_pelatihans,id',

            'nomor_sertifikat' =>
            'required|string|max:255',

            'tanggal_terbit' =>
            'required|date',

            'file_pdf' =>
            'nullable|mimes:pdf|max:2048',

            'status' =>
            'required',

            'kota_terbit' => [
                'required',
                'string',
                'max:100'
            ],

        ]);



        $data = [

            'peserta_id' =>
            $request->peserta_id,

            'program_pelatihan_id' =>
            $request->program_pelatihan_id,

            'nomor_sertifikat' =>
            $request->nomor_sertifikat,

            'tanggal_terbit' =>
            $request->tanggal_terbit,

            'kota_terbit' =>
            $request->kota_terbit,

            'status' =>
            $request->status,

        ];




        if ($request->hasFile('file_pdf')) {


            if (
                $sertifikat->file_pdf &&
                Storage::disk('public')
                ->exists($sertifikat->file_pdf)
            ) {

                Storage::disk('public')
                    ->delete($sertifikat->file_pdf);
            }



            $data['file_pdf'] =
                $request->file('file_pdf')
                ->store('sertifikat', 'public');
        }




        $sertifikat->update($data);



        return redirect()
            ->route('sertifikat.index')
            ->with(
                'success',
                'Sertifikat berhasil diperbarui'
            );
    }





    /**
     * Hapus sertifikat
     */
    public function destroy(int $id)
    {

        $sertifikat =
            Sertifikat::findOrFail($id);



        if (
            $sertifikat->file_pdf &&
            Storage::disk('public')
            ->exists($sertifikat->file_pdf)
        ) {

            Storage::disk('public')
                ->delete($sertifikat->file_pdf);
        }



        $sertifikat->delete();



        return redirect()
            ->route('sertifikat.index')
            ->with(
                'success',
                'Sertifikat berhasil dihapus'
            );
    }





    /**
     * Generate PDF sertifikat + QR Code
     */






    /**
     * Validasi QR Code
     */
    public function validasi($uuid)
    {

        $sertifikat = Sertifikat::with([
            'peserta',
            'programPelatihan'
        ])
            ->where('uuid', $uuid)
            ->first();



        if (!$sertifikat) {

            return view(
                'sertifikat.invalid'
            );
        }



        return view(
            'pages.backend.sertifikat.validasi',
            compact('sertifikat')
        );
    }
}
