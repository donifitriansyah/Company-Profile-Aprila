@extends('layouts.frontend')

@section('title', 'Validasi Sertifikat')


@section('content')


    <section class="py-5"
        style="
background-image:url('{{ asset('frontend/assets/img/bg/sect-lyn.png') }}');
background-size:cover;
background-position:center;
">


        <div class="container">


            <div class="row justify-content-center">


                <div class="col-md-8">



                    {{-- FORM PENCARIAN --}}

                    <div class="card shadow border-0 mb-4">


                        <div class="card-body p-4 text-center">


                            <h3 class="fw-bold mb-3">

                                Cek Keaslian Sertifikat

                            </h3>


                            <p class="text-muted">

                                Masukkan nomor sertifikat untuk melakukan validasi

                            </p>



                            <form action="{{ route('cek-sertifikat.validasi.search') }}" method="POST">


                                @csrf


                                <div class="input-group">


                                    <input type="text" name="nomor_sertifikat" class="form-control"
                                        placeholder="Contoh: APR/2026/001" value="{{ old('nomor_sertifikat') }}">


                                    <button class="btn btn-primary">

                                        Cari Sertifikat

                                    </button>


                                </div>



                                @error('nomor_sertifikat')
                                    <div class="text-danger mt-2">

                                        {{ $message }}

                                    </div>
                                @enderror



                            </form>


                        </div>


                    </div>





                    {{-- JIKA SERTIFIKAT DITEMUKAN --}}


                    @if (isset($sertifikat))


                        @if ($sertifikat)



                            <div class="card shadow border-0">


                                <div class="card-body text-center p-5">



                                    <div class="mb-3">

                                        <i class="bi bi-patch-check-fill text-success" style="font-size:80px;">
                                        </i>

                                    </div>



                                    <h2 class="fw-bold text-success">

                                        Sertifikat Valid

                                    </h2>



                                    <p class="text-muted">

                                        Sertifikat ini resmi diterbitkan oleh

                                        <strong>
                                            APRILA
                                        </strong>

                                    </p>



                                    <hr>



                                    <div class="text-start mt-4">



                                        <div class="mb-3">

                                            <small class="text-muted">
                                                Nama Peserta
                                            </small>

                                            <h5 class="fw-bold">

                                                {{ $sertifikat->peserta->nama_lengkap }}

                                            </h5>

                                        </div>




                                        <div class="mb-3">

                                            <small class="text-muted">
                                                Program Pelatihan
                                            </small>


                                            <h5>

                                                {{ $sertifikat->programPelatihan->nama_program }}

                                            </h5>

                                        </div>





                                        <div class="mb-3">

                                            <small class="text-muted">
                                                Nomor Sertifikat
                                            </small>


                                            <h5>

                                                {{ $sertifikat->nomor_sertifikat }}

                                            </h5>

                                        </div>





                                        <div class="mb-3">

                                            <small class="text-muted">
                                                Tanggal Terbit
                                            </small>


                                            <h5>

                                                {{ $sertifikat->tanggal_terbit->format('d-m-Y') }}

                                            </h5>


                                        </div>





                                        <div class="mb-3">

                                            <small class="text-muted">
                                                Kota Terbit
                                            </small>


                                            <h5>

                                                {{ $sertifikat->kota_terbit }}

                                            </h5>


                                        </div>





                                        <div class="mb-3">

                                            <small class="text-muted">
                                                Status
                                            </small>


                                            <h5>


                                                @if ($sertifikat->status)
                                                    <span class="badge bg-success">

                                                        TERBIT

                                                    </span>
                                                @else
                                                    <span class="badge bg-secondary">

                                                        DRAFT

                                                    </span>
                                                @endif


                                            </h5>


                                        </div>



                                    </div>




                                    <hr>



                                    <p class="mb-0 text-muted">

                                        ID Validasi:

                                    </p>



                                    <code>

                                        {{ $sertifikat->uuid }}

                                    </code>

                                    {{-- <hr>

                                    <a href="{{ route('sertifikat.view', $sertifikat->id) }}" class="btn btn-primary mt-3"
                                        target="_blank">

                                        <i class="bi bi-file-earmark-pdf"></i>
                                        Lihat Sertifikat

                                    </a> --}}



                                </div>



                            </div>
                        @else
                            <div class="alert alert-danger text-center shadow">

                                <i class="bi bi-x-circle"></i>

                                <br>

                                <strong>
                                    Sertifikat Tidak Ditemukan
                                </strong>

                                <br>

                                Nomor sertifikat yang Anda masukkan tidak terdaftar.

                            </div>



                        @endif


                    @endif




                </div>


            </div>


        </div>


    </section>


@endsection
