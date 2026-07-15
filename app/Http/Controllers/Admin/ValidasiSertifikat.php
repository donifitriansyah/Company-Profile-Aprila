<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Sertifikat;
    use Illuminate\Http\Request;

class ValidasiSertifikat extends Controller
{



    public function validasi()
    {
        return view('pages.frontend.cek-sertifikat');
    }



    public function searchValidasi(Request $request)
    {

        $request->validate([

            'nomor_sertifikat' => [
                'required',
                'string'
            ]

        ]);



        $sertifikat = Sertifikat::with([
            'peserta',
            'programPelatihan'
        ])
            ->where(
                'nomor_sertifikat',
                $request->nomor_sertifikat
            )
            ->first();



        return view(
            'pages.frontend.cek-sertifikat',
            compact('sertifikat')
        );
    }
}
