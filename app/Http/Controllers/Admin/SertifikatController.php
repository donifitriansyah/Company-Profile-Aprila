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

            'ttd' => [
                'nullable',
                'image',
                'mimes:png,jpg,jpeg',
                'max:2048'
            ],

            'pas_foto' => [
                'nullable',
                'image',
                'mimes:png,jpg,jpeg',
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

            'status' =>
            $request->status,

        ];


        // Upload TTD
        if ($request->hasFile('ttd')) {

            $data['ttd'] =
                $request->file('ttd')
                ->store('sertifikat/ttd', 'public');
        }


        // Upload Pas Foto
        if ($request->hasFile('pas_foto')) {

            $data['pas_foto'] =
                $request->file('pas_foto')
                ->store('sertifikat/pas-foto', 'public');
        }


        Sertifikat::create($data);


        return redirect()
            ->route('sertifikat.index')
            ->with(
                'success',
                'Sertifikat berhasil ditambahkan'
            );
    }
    public function update(Request $request, int $id)
    {
        $sertifikat = Sertifikat::findOrFail($id);


        $request->validate([

            'peserta_id' =>
            'required|exists:pesertas,id',

            'program_pelatihan_id' =>
            'required|exists:program_pelatihans,id',

            'nomor_sertifikat' =>
            'required|string|max:255',

            'tanggal_terbit' =>
            'required|date',


            'ttd' => [
                'nullable',
                'image',
                'mimes:png,jpg,jpeg',
                'max:2048'
            ],


            'pas_foto' => [
                'nullable',
                'image',
                'mimes:png,jpg,jpeg',
                'max:2048'
            ],


            'status' =>
            'required',

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

            'status' =>
            $request->status,

        ];



        // Update TTD
        if ($request->hasFile('ttd')) {


            if (
                $sertifikat->ttd &&
                Storage::disk('public')
                ->exists($sertifikat->ttd)
            ) {

                Storage::disk('public')
                    ->delete($sertifikat->ttd);
            }


            $data['ttd'] =
                $request->file('ttd')
                ->store('sertifikat/ttd', 'public');
        }



        // Update Pas Foto
        if ($request->hasFile('pas_foto')) {


            if (
                $sertifikat->pas_foto &&
                Storage::disk('public')
                ->exists($sertifikat->pas_foto)
            ) {

                Storage::disk('public')
                    ->delete($sertifikat->pas_foto);
            }


            $data['pas_foto'] =
                $request->file('pas_foto')
                ->store('sertifikat/pas-foto', 'public');
        }



        $sertifikat->update($data);



        return redirect()
            ->route('sertifikat.index')
            ->with(
                'success',
                'Sertifikat berhasil diperbarui'
            );
    }



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
