@extends('layouts.frontend')

@section('title', 'Validasi Sertifikat')

@section('content')


    <section class="py-5" style="background-image: url('{{ asset('frontend/assets/img/bg/sect-lyn.png') }}'); background-size: cover; background-position: center center;">


        <div class="row justify-content-center">


            <div class="col-md-8">


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



                    </div>


                </div>


            </div>


        </div>


    </section>


@endsection
