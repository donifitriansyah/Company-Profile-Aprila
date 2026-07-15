<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
<!-- Tombol Cetak -->
<button onclick="window.print()" class="btn-print">
    Cetak Sertifikat
</button>


<!-- AREA YANG AKAN DI PRINT -->
<div class="print-area">


    <!-- =====================
         HALAMAN DEPAN
    ====================== -->

    <div class="certificate-page">

        <div class="certificate-bg-wrapper">

            <img src="{{ asset('frontend/assets/img/depan.png') }}" class="certificate-bg">

        </div>

        <style>
            .certificate-bg-wrapper {

                pointer-events: none;

                user-select: none;

            }


            .certificate-bg {

                pointer-events: none;

                user-select: none;

            }
        </style>


        <div class="nomor_sertifikat">
            {{ $sertifikat->nomor_sertifikat }}
        </div>


        <div class="nama">
            {{ $sertifikat->peserta->nama_lengkap }}
        </div>


        <div class="program">
            {{ $sertifikat->programPelatihan->nama_program }}
        </div>
        <div class="deskripsi">
            {{ $sertifikat->programPelatihan->deskripsi }}
        </div>

        <div class="tempat-tanggal">
            {{ $sertifikat->kota_terbit }},
            {{ $sertifikat->tanggal_terbit->translatedFormat('d F Y') }}
        </div>


        <div class="qr">
            {!! QrCode::size(100)->generate($url) !!}
        </div>


    </div>




    <!-- =====================
         HALAMAN BELAKANG
    ====================== -->

    <div class="certificate-page-back">

        <div class="certificate-bg-wrapper">

            <img src="{{ asset('frontend/assets/img/belakang.png') }}" class="certificate-bg-back">

        </div>




        <div class="table-kompetensi">


            <table>

                <thead>

                    <tr>
                        <th width="10%">No</th>

                        <th width="70%">
                            Unit Kompetensi
                        </th>

                        <th width="20%">
                            Jumlah JP
                        </th>

                    </tr>

                </thead>


                <tbody>


                    @foreach ($sertifikat->programPelatihan->details as $detail)
                        <tr>

                            <td>
                                {{ $detail->urutan }}
                            </td>


                            <td>
                                {{ $detail->nama_unit }}
                            </td>


                            <td>
                                {{ $detail->jumlah_jp }} JP
                            </td>


                        </tr>
                    @endforeach


                </tbody>



                <tfoot>


                    <tr>

                        <td colspan="2">
                            Total JP
                        </td>


                        <td>
                            {{ $sertifikat->programPelatihan->details->sum('jumlah_jp') }} JP
                        </td>


                    </tr>


                </tfoot>



            </table>



        </div>



    </div>



</div>



<style>
    /* =====================
   TAMPILAN NORMAL
===================== */


    body {
            user-select:none;

    -webkit-user-select:none;
        background: #f1f3f5;

    }



    /* tombol */

    .btn-print {

        margin: 30px;

        padding: 12px 25px;

        background: #1b2d55;

        color: white;

        border: none;

        border-radius: 8px;

        cursor: pointer;

        font-size: 16px;

    }




    .print-area {

        display: flex;

        flex-direction: column;

        align-items: center;

    }




    /* =====================
   UKURAN SERTIFIKAT
===================== */


    .certificate-page,
    .certificate-page-back {


        width: 210mm;

        height: 297mm;

        position: relative;

        overflow: hidden;

        background: white;

    }



    /* background depan */

    .certificate-bg {


        position: absolute;

        width: 210mm;

        height: 297mm;

        top: 0;

        left: 0;

    }



    /* background belakang */

    .certificate-bg-back {


        position: absolute;

        width: 210mm;

        height: 297mm;

        top: 0;

        left: 0;

    }




    /* =====================
   DEPAN
===================== */



    .nomor_sertifikat {


        position: absolute;


        top: 102mm;


        width: 100%;


        text-align: center;


        font-family: 'Poppins', sans-serif;

        font-size: 16px;

        font-weight: 500;

        letter-spacing: 1px;


    }




    .nama {


        position: absolute;


        top: 127mm;


        width: 100%;


        text-align: center;


        font-family: 'Poppins', sans-serif;

        font-size: 26px;

        font-weight: 700;



    }

    .tempat-tanggal {

        position: absolute;


        top: 195mm;


        width: 100%;


        text-align: center;


        font-family: 'Poppins', sans-serif;

        font-size: 16px;

        font-weight: 200;


    }


    .program {


        position: absolute;


        top: 167mm;


        width: 100%;


        text-align: center;


        font-family: 'Poppins', sans-serif;

        font-size: 26px;

        font-weight: 700;


    }

    .deskripsi {


        position: absolute;


        top: 180mm;


        width: 100%;



        text-align: center;


        font-family: 'Poppins', sans-serif;

        font-size: 16px;

        font-weight: 200;


    }





    .qr {


        position: absolute;


        right: 15mm;


        bottom: 28mm;


        background: white;


        padding: 4mm;


    }



    /* =====================
   BELAKANG TABLE
===================== */


    .table-kompetensi {


        position: absolute;


        top: 60mm;


        left: 10mm;


        width: 180mm;


    }



    table {

        font-family: 'Poppins', sans-serif;

        font-size: 16px;


        width: 100%;


        border-collapse: collapse;




    }



    table th {


        border: 1px solid #000;


        padding: 8px;


        text-align: center;


    }



    table td {


        border: 1px solid #000;


        padding: 8px;


        vertical-align: top;


    }



    table td:first-child {


        text-align: center;


    }



    tfoot td {


        font-weight: bold;

        text-align: center;

    }



    /* =====================
   PRINT
===================== */


    @media print {


        @page {


            size: A4 portrait;

            margin: 0;

        }



        body {


            margin: 0;

            padding: 0;

            background: white;

        }




        .btn-print {


            display: none;

        }




        .print-area {


            display: block;

        }




        .certificate-page {


            page-break-after: always;

        }




        .certificate-page-back {


            page-break-after: auto;

        }



    }
</style>
