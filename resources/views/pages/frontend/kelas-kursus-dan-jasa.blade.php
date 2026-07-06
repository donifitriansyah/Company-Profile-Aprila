@extends('layouts.frontend')
@section('title')
    Kelas Kursus dan Jasa Aprila
@endsection
@section('content')
    <section class="section-top"
        style="background-image: url('{{ asset('frontend/assets/img/bg-2.png') }}');
           background-size: cover;
           background-position: center;
           background-repeat: no-repeat;">
        <div class="container">
            <div class="col-lg-10 offset-lg-1 text-center">
                <div class="section-top-title wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">
                    <h1>Kelas Kursus dan Jasa Aprila</h1>
                    <ul>
                        <li><a href="{{ route('welcome') }}">Beranda</a></li>
                        <li> / Kelas Kursus dan Jasa</li>
                    </ul>
                </div><!-- //.HERO-TEXT -->
            </div><!--- END COL -->
        </div><!--- END CONTAINER -->
    </section>
    <!-- END SECTION TOP -->


    <!-- START COURSE -->
    <section class=" section-padding">
        <div class="container">
            <div class="row">

                @foreach ($courses as $course)
                    <div class="col-lg-4 col-md-6 mb-4">

                        <div class="single_course">

                            <div class="single_c_img">

                                @if ($course->image)
                                    <img src="{{ asset('storage/' . $course->image) }}" class="img-fluid"
                                        alt="{{ $course->title }}">
                                @else
                                    <img src="{{ asset('frontend/assets/img/course/default.jpg') }}" class="img-fluid"
                                        alt="Default">
                                @endif

                            </div>

                            @for ($i = 1; $i <= 5; $i++)
                                <i class="fa fa-star"></i>
                            @endfor

                            <h4>
                                <a href="#">
                                    {{ $course->title }}
                                </a>
                            </h4>

                            <p>
                                <span class="ti-alarm-clock"></span>

                                {{ $course->duration_days }} Hari
                            </p>

                            <div class="price">

                                Rp {{ number_format($course->price, 0, ',', '.') }}

                            </div>

                        </div>

                    </div>
                @endforeach

            </div><!--- END ROW -->
        </div><!--- END CONTAINER -->
    </section>
    <!-- END COURSE -->
    <!-- START COURSE -->
    <section class=" section-padding"
        style="background-image: url('{{ asset('frontend/assets/img/bg/background4.png') }}'); background-size: cover; background-position: center center;">
        <div class="container">
            <div class="row">

                @forelse($jasas as $jasa)
                    <div class="col-lg-4 col-md-6 mb-4">

                        <div class="single_course h-100">

                            <div class="single_c_img">

                                @if ($jasa->gambar)
                                    <img src="{{ asset('storage/' . $jasa->gambar) }}" class="img-fluid"
                                        alt="{{ $jasa->nama }}">
                                @else
                                    <img src="{{ asset('frontend/assets/img/course/default.jpg') }}" class="img-fluid"
                                        alt="Default">
                                @endif

                            </div>

                            @if ($jasa->unggulan)
                                <span class="badge bg-warning text-dark mb-2">
                                    ⭐ Jasa Unggulan
                                </span>
                            @endif

                            <h4>
                                <a href="#">
                                    {{ $jasa->nama }}
                                </a>
                            </h4>

                            <p>

                                {{ \Illuminate\Support\Str::limit($jasa->deskripsi_singkat, 100) }}

                            </p>

                            <p class="mb-2">

                                <span class="ti-briefcase"></span>

                                {{ $jasa->kategori }}

                            </p>

                            <p class="mb-3">

                                <span class="ti-time"></span>

                                {{ $jasa->estimasi_pengerjaan }}

                            </p>

                            <div class="price">

                                @if ($jasa->harga_mulai)
                                    Mulai dari

                                    <strong>

                                        Rp {{ number_format($jasa->harga_mulai, 0, ',', '.') }}

                                    </strong>

                                    @if ($jasa->satuan_harga)
                                        / {{ $jasa->satuan_harga }}
                                    @endif
                                @else
                                    Hubungi Kami
                                @endif

                            </div>

                        </div>

                    </div>

                @empty

                    <div class="col-12">

                        <div class="alert alert-info text-center">

                            Belum ada data jasa.

                        </div>

                    </div>
                @endforelse 

            </div><!--- END ROW -->
        </div><!--- END CONTAINER -->
    </section>
    <!-- END COURSE -->
@endsection
