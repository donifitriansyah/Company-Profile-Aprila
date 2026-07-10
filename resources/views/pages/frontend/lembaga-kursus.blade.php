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
                    <h1>Lembaga Kursus dan Pelatihan Aprila</h1>
                    <ul>
                        <li><a href="{{ route('welcome') }}">Beranda</a></li>
                        <li> / Lembaga Kursus</li>
                    </ul>
                </div><!-- //.HERO-TEXT -->
            </div><!--- END COL -->
        </div><!--- END CONTAINER -->
    </section>
    <!-- END SECTION TOP -->

    <!-- START ABOUT APRILA -->
    <section class="ab_area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-12 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s"
                    data-wow-offset="0">
                    <div class="ab_img">
                        <img src="{{ asset('frontend/assets/img/LKP Tentang.png') }}" class="img-fluid"
                            alt="Tentang Aprila">
                    </div>
                </div>

                <div class="col-lg-6 col-sm-12 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s"
                    data-wow-offset="0">
                    <div class="ab_content">
                        <h2>Tentang Lembaga Kursus dan Pelatihan Aprila</h2>

                        <p>
                            Lembaga Kursus dan Pelatihan Aprila merupakan Lembaga Kursus dan Pelatihan (LKP)
                            yang terdaftar secara resmi dan beroperasi di wilayah Kubu Raya dan
                            Kota Pontianak. Kami berkomitmen menyelenggarakan pendidikan nonformal
                            yang berkualitas melalui program pembelajaran berbasis keterampilan,
                            pengembangan kompetensi, dan peningkatan kualitas sumber daya manusia.
                        </p>

                        <p>
                            Sejak berdiri pada tahun 2009, Aprila telah membantu peserta didik
                            mengembangkan kemampuan sesuai minat dan kebutuhan, baik untuk
                            melanjutkan pendidikan, meningkatkan kompetensi, maupun mempersiapkan
                            diri menghadapi dunia kerja.
                        </p>

                        <ul>
                            <li><span class="ti-check"></span> Metode Pembelajaran Berbasis Praktik & Bakat Minat (BP–BBM)
                            </li>
                            <li><span class="ti-check"></span> Fokus pada Keterampilan Digital & Pengembangan Diri</li>
                            <li><span class="ti-check"></span> Program Pembelajaran yang Fleksibel</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END ABOUT APRILA -->

    <!-- CONTENT -->
    <section class="py-5"
        style="background-image: url('{{ asset('frontend/assets/img/bg/sect-lyn.png') }}'); background-size: cover; background-position: center center;">
        <div class="container">
            <div class="row g-4">
                <!-- CONTENT -->
                <section class="py-5">
                    <div class="container">

                        <!-- HEADER -->
                        <div class="section-title text-center mb-5">

                            <!-- LOGO WRAPPER -->
                            <div class="ab_img mb-3">
                                <img src="{{ asset('frontend/assets/img/LKP.png') }}" class="img-fluid"
                                    alt="Tentang Aprila" style="width: 420px;">
                            </div>



                            <!-- IDENTITAS -->
                            <div class="mt-2">
                                <p class="text-muted mb-0" style="font-size: 14px; line-height: 1.6;">
                                    <i class="fa-solid fa-id-card me-1 text-primary"></i>
                                    NPSN : K5655040
                                    <span class="mx-2">|</span>
                                    <i class="fa-solid fa-building-columns me-1 text-success"></i>
                                    Tahun Berdiri : 2009
                                    <span class="mx-2">|</span>
                                    <i class="fa-solid fa-certificate me-1 text-warning"></i>
                                    VIN LPK : 1912611201
                                </p>
                            </div>

                        </div>

                        <div class="row g-4 justify-content-center">

                            <!-- VISI -->
                            <div class="col-md-6 col-lg-5">
                                <div class="card border-0 shadow h-100 text-center p-4 visi-card">

                                    <!-- ICON -->
                                    <div class="mb-3">
                                        <i class="fa-solid fa-eye fa-3x text-primary"></i>
                                    </div>


                                    <h4 class="fw-bold mb-3">Visi</h4>

                                    <p class="text-muted mb-0">
                                        Menjadi lembaga kursus dan pelatihan yang menghasilkan sumber daya manusia yang
                                        cakap, terampil, kreatif, dan berdaya guna dalam bidang administrasi, digital, dan
                                        komunikasi publik di wilayah Kalimantan Barat.

                                    </p>
                                </div>
                            </div>

                            <!-- MISI -->
                            <div class="col-md-6 col-lg-7">
                                <div class="card border-0 shadow h-100 p-4 misi-card">

                                    <!-- ICON -->
                                    <div class="text-center mb-3">
                                        <i class="fa-solid fa-bullseye fa-3x text-success"></i>
                                    </div>

                                    <h4 class="fw-bold text-center mb-3">Misi</h4>

                                    <ul class="list-unstyled m-0">
                                        <li class="mb-2">
                                            <i class="fa-solid fa-check text-success me-2"></i>
                                            Menyelenggarakan program kursus dan pelatihan di bidang administrasi
                                            perkantoran, desain grafis, video editor, dan komunikasi publik.
                                        </li>

                                        <li class="mb-2">
                                            <i class="fa-solid fa-check text-success me-2"></i>
                                            Membekali peserta dengan keterampilan kerja spesifik agar mampu bekerja secara
                                            efektif dan efisien, khususnya bagi pencari kerja yang ingin berkembang dan
                                            pemantapan keahlian.
                                        </li>

                                        <li class="mb-2">
                                            <i class="fa-solid fa-check text-success me-2"></i>
                                            Bersinergi dengan instansi dan pihak terkait dalam upaya menghasilkan tenaga
                                            kerja yang kompeten, berdaya guna, serta memiliki etos kerja yang baik.
                                        </li>
                                    </ul>

                                </div>
                            </div>


                        </div>
                    </div>
                </section>

            </div>
        </div>
    </section>


    <!-- START COURSE DEWASA -->
    <section class=" section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-sm-6 col-xs-12">
                    <div class="section-title">
                        <h2>Wujudkan Kemampuan Terbaik Anda Bersama Lembaga Kursus dan Pelatihan Aprila</h2>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-xs-12">
                    {{-- <div class="cour_btn text-end">
                        <a href="course.html" class="btn_one">Lihat Semua <i class="ti-arrow-top-right"></i></a>
                    </div> --}}
                </div>
            </div><!--- END ROW -->
            <div class="course-carousel owl-carousel owl-theme">
                {{-- Aplikasi Perkantoran --}}
                <div class="single_course">

                    <div class="single_c_img">
                        <img src="{{ asset('frontend/assets/img/course/Course Perkantoran.png') }}" class="img-fluid"
                            alt="course-image">
                        <span>Office</span>
                    </div>


                    <div class="course-rating">
                        <i class="fa fa-star text-warning"></i>
                        <i class="fa fa-star text-warning"></i>
                        <i class="fa fa-star text-warning"></i>
                        <i class="fa fa-star text-warning"></i>
                        <i class="fa fa-star text-warning"></i>
                    </div>


                    <h4>
                        <a href="{{ route('detail-aplikasi-perkantoran') }}">Aplikasi Perkantoran</a>
                    </h4>
                    <p>Menguasai berbagai perangkat lunak esensial untuk produktivitas kerja. </p>


                    <ul class="course-info">
                        <li>
                            <i class="ti-book"></i>
                            <span>10 Pertemuan</span>
                        </li>

                        <li>
                            <i class="ti-alarm-clock"></i>
                            <span>90 Menit / Pertemuan</span>
                        </li>

                        <li>
                            <i class="ti-calendar"></i>
                            <span>2x sepekan</span>
                        </li>
                    </ul>




                    <a href="{{ route('detail-aplikasi-perkantoran') }}" class="btn btn-primary btn-block">
                        Lihat Detail
                    </a>

                </div>
                {{-- Aplikasi Desain Grafis --}}
                <div class="single_course">

                    <div class="single_c_img">
                        <img src="{{ asset('frontend/assets/img/course/Grafis Desain.png') }}" class="img-fluid"
                            alt="course-image">
                        <span>Desain Grafis</span>
                    </div>


                    <div class="course-rating">
                        <i class="fa fa-star text-warning"></i>
                        <i class="fa fa-star text-warning"></i>
                        <i class="fa fa-star text-warning"></i>
                        <i class="fa fa-star text-warning"></i>
                        <i class="fa fa-star text-warning"></i>
                    </div>


                    <h4>
                        <a href="{{ route('detail-desain-grafis') }}">Desain Grafis</a>
                    </h4>
                    <p>Menciptakan desain visual menarik dengan mudah menggunakan platform Canva.</p>


                    <ul class="course-info">
                        <li>
                            <i class="ti-book"></i>
                            <span>12 Pertemuan</span>
                        </li>

                        <li>
                            <i class="ti-alarm-clock"></i>
                            <span>90 Menit / Pertemuan</span>
                        </li>

                        <li>
                            <i class="ti-calendar"></i>
                            <span>3x sepekan</span>
                        </li>
                    </ul>



                    <a href="{{ route('detail-desain-grafis') }}" class="btn btn-primary btn-block">
                        Lihat Detail
                    </a>

                </div>
                {{-- Video Editing --}}
                <div class="single_course">

                    <div class="single_c_img">
                        <img src="{{ asset('frontend/assets/img/course/Video Editing.png') }}" class="img-fluid"
                            alt="course-image">
                        <span>Video Editing</span>
                    </div>


                    <div class="course-rating">
                        <i class="fa fa-star text-warning"></i>
                        <i class="fa fa-star text-warning"></i>
                        <i class="fa fa-star text-warning"></i>
                        <i class="fa fa-star text-warning"></i>
                        <i class="fa fa-star text-warning"></i>
                    </div>


                    <h4>
                        <a href="{{ route('detail-video-editing') }}">Video Editing</a>
                    </h4>
                    <p>Menciptakan desain visual menarik dengan mudah menggunakan platform Canva.</p>


                    <ul class="course-info">
                        <li>
                            <i class="ti-book"></i>
                            <span>12 Pertemuan</span>
                        </li>

                        <li>
                            <i class="ti-alarm-clock"></i>
                            <span>90 Menit / Pertemuan</span>
                        </li>

                        <li>
                            <i class="ti-calendar"></i>
                            <span>3x sepekan</span>
                        </li>
                    </ul>

                    <a href="{{ route('detail-video-editing') }}" class="btn btn-primary btn-block">
                        Lihat Detail
                    </a>

                </div>
                {{-- Public Speaking --}}
                <div class="single_course">

                    <div class="single_c_img">
                        <img src="{{ asset('frontend/assets/img/course/Public Speaking.png') }}" class="img-fluid"
                            alt="course-image">
                        <span>Public Speaking</span>
                    </div>


                    <div class="course-rating">
                        <i class="fa fa-star text-warning"></i>
                        <i class="fa fa-star text-warning"></i>
                        <i class="fa fa-star text-warning"></i>
                        <i class="fa fa-star text-warning"></i>
                        <i class="fa fa-star text-warning"></i>
                    </div>


                    <h4>
                        <a href="{{ route('detail-public-speaking') }}">Public Speaking</a>
                    </h4>
                    <p>Meningkatkan kepercayaan diri dan kemampuan presentasi yang efektif.</p>
                    <ul class="course-info">
                        <li>
                            <i class="ti-book"></i>
                            <span>12 Pertemuan</span>
                        </li>

                        <li>
                            <i class="ti-alarm-clock"></i>
                            <span>90 Menit / Pertemuan</span>
                        </li>

                        <li>
                            <i class="ti-calendar"></i>
                            <span>3x sepekan</span>
                        </li>
                    </ul>

                    <a href="{{ route('detail-public-speaking') }}" class="btn btn-primary btn-block">
                        Lihat Detail
                    </a>

                </div>
                {{-- Digital Marketing --}}
                <div class="single_course">

                    <div class="single_c_img">
                        <img src="{{ asset('frontend/assets/img/course/Digital Marketing.png') }}" class="img-fluid"
                            alt="course-image">
                        <span>Digital Marketing</span>
                    </div>


                    <div class="course-rating">
                        <i class="fa fa-star text-warning"></i>
                        <i class="fa fa-star text-warning"></i>
                        <i class="fa fa-star text-warning"></i>
                        <i class="fa fa-star text-warning"></i>
                        <i class="fa fa-star text-warning"></i>
                    </div>


                    <h4>
                        <a href="{{ route('detail-digital-marketing') }}">Digital Marketing</a>
                    </h4>
                    <p>Memahami strategi pemasaran digital untuk menjangkau audiens lebih luas.</p>
                    <ul class="course-info">
                        <li>
                            <i class="ti-book"></i>
                            <span>12 Pertemuan</span>
                        </li>

                        <li>
                            <i class="ti-alarm-clock"></i>
                            <span>90 Menit / Pertemuan</span>
                        </li>

                        <li>
                            <i class="ti-calendar"></i>
                            <span>3x sepekan</span>
                        </li>
                    </ul>


                    <a href="{{ route('detail-digital-marketing') }}" class="btn btn-primary btn-block">
                        Lihat Detail
                    </a>

                </div>

            </div>
        </div><!--- END CONTAINER -->
    </section>


    {{-- Kids Program --}}
    <section class=" section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-sm-6 col-xs-12">
                    <div class="section-title">
                        <h2>Wujudkan Potensi Terbaik Buah Hati Anda Bersama Program Kids Academy di Aprila</h2>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-xs-12">
                    {{-- <div class="cour_btn text-end">
                        <a href="course.html" class="btn_one">Lihat Semua <i class="ti-arrow-top-right"></i></a>
                    </div> --}}
                </div>
            </div><!--- END ROW -->
            <div class="course-carousel owl-carousel owl-theme">
                {{-- Komputer Kids --}}
                <div class="single_course">

                    <div class="single_c_img">
                        <img src="{{ asset('frontend/assets/img/course/Computer Kids.png') }}" class="img-fluid"
                            alt="course-image">
                        <span>Computer</span>
                    </div>


                    <div class="course-rating">
                        <i class="fa fa-star text-warning"></i>
                        <i class="fa fa-star text-warning"></i>
                        <i class="fa fa-star text-warning"></i>
                        <i class="fa fa-star text-warning"></i>
                        <i class="fa fa-star text-warning"></i>
                    </div>


                    <h4>
                        <a href="{{ route('detail-paket-a') }}">Computer Kids | Bersertifikat</a>
                    </h4>
                    <p>Menguasai berbagai perangkat lunak esensial untuk produktivitas pembelajaran.</p>


                    <ul class="course-info">
                        <li>
                            <i class="ti-book"></i>
                            <span>24 Pertemuan</span>
                        </li>

                        <li>
                            <i class="ti-alarm-clock"></i>
                            <span>60-90 Menit / Pertemuan</span>
                        </li>

                        <li>
                            <i class="ti-calendar"></i>
                            <span>3x sepekan</span>
                        </li>
                    </ul>


                    <a href="{{ route('detail-paket-a') }}" class="btn btn-primary btn-block">
                        Lihat Detail
                    </a>

                </div>

                {{-- English Kids | Bersertifikat --}}
                <div class="single_course">

                    <div class="single_c_img">
                        <img src="{{ asset('frontend/assets/img/course/English Kids.png') }}" class="img-fluid"
                            alt="course-image">
                        <span>English</span>
                    </div>


                    <div class="course-rating">
                        <i class="fa fa-star text-warning"></i>
                        <i class="fa fa-star text-warning"></i>
                        <i class="fa fa-star text-warning"></i>
                        <i class="fa fa-star text-warning"></i>
                        <i class="fa fa-star text-warning"></i>
                    </div>


                    <h4>
                        <a href="{{ route('detail-paket-a') }}">English Kids | bersertifikat</a>
                    </h4>
                    <p>Belajar dan memandu siswa cakap dan terampil dalam Bahasa inggris.</p>


                    <ul class="course-info">
                        <li>
                            <i class="ti-book"></i>
                            <span>24 Pertemuan</span>
                        </li>

                        <li>
                            <i class="ti-alarm-clock"></i>
                            <span>60-90 Menit / Pertemuan</span>
                        </li>

                        <li>
                            <i class="ti-calendar"></i>
                            <span>3x sepekan</span>
                        </li>
                    </ul>


                    <a href="{{ route('detail-paket-a') }}" class="btn btn-primary btn-block">
                        Lihat Detail
                    </a>

                </div>

                {{-- Public Speaking Kids | Bersertifikat --}}
                <div class="single_course">

                    <div class="single_c_img">
                        <img src="{{ asset('frontend/assets/img/course/Public Speaking Kids.png') }}" class="img-fluid"
                            alt="course-image">
                        <span>Public Speaking</span>
                    </div>


                    <div class="course-rating">
                        <i class="fa fa-star text-warning"></i>
                        <i class="fa fa-star text-warning"></i>
                        <i class="fa fa-star text-warning"></i>
                        <i class="fa fa-star text-warning"></i>
                        <i class="fa fa-star text-warning"></i>
                    </div>


                    <h4>
                        <a href="{{ route('detail-paket-a') }}">Public Speaking Kids | Bersertifikat</a>
                    </h4>
                    <p>Meningkatkan kepercayaan diri dan kemampuan berbicara, presentasi dan hal yang senada untuk
                        Pendidikan Anak.</p>


                    <ul class="course-info">
                        <li>
                            <i class="ti-book"></i>
                            <span>24 Pertemuan</span>
                        </li>

                        <li>
                            <i class="ti-alarm-clock"></i>
                            <span>60-90 Menit / Pertemuan</span>
                        </li>

                        <li>
                            <i class="ti-calendar"></i>
                            <span>3x sepekan</span>
                        </li>
                    </ul>


                    <a href="{{ route('detail-paket-a') }}" class="btn btn-primary btn-block">
                        Lihat Detail
                    </a>

                </div>

                {{-- Bimbingan Belajar (Bimbel) --}}
                <div class="single_course">

                    <div class="single_c_img">
                        <img src="{{ asset('frontend/assets/img/course/Bimbel.png') }}" class="img-fluid"
                            alt="course-image">
                        <span>BIMBEL</span>
                    </div>


                    <div class="course-rating">
                        <i class="fa fa-star text-warning"></i>
                        <i class="fa fa-star text-warning"></i>
                        <i class="fa fa-star text-warning"></i>
                        <i class="fa fa-star text-warning"></i>
                        <i class="fa fa-star text-warning"></i>
                    </div>


                    <h4>
                        <a href="{{ route('detail-paket-a') }}">Bimbingan Belajar</a>
                    </h4>
                    <p>Pendampingan belajar akademik sesuai kebutuhan peserta.</p>
                    <ul class="course-info">
                        <li>
                            <i class="ti-book"></i>
                            <span>Pertemuan Rutin</span>
                        </li>

                    </ul>


                    <a href="{{ route('detail-paket-a') }}" class="btn btn-primary btn-block">
                        Lihat Detail
                    </a>

                </div>
                {{-- Program Terpadu Aprila Academy --}}
                <div class="single_course">

                    <div class="single_c_img">
                        <img src="{{ asset('frontend/assets/img/course/Aprila Academy Kids.png') }}" class="img-fluid"
                            alt="course-image">
                        <span>Aprila Academy</span>
                    </div>


                    <div class="course-rating">
                        <i class="fa fa-star text-warning"></i>
                        <i class="fa fa-star text-warning"></i>
                        <i class="fa fa-star text-warning"></i>
                        <i class="fa fa-star text-warning"></i>
                        <i class="fa fa-star text-warning"></i>
                    </div>


                    <h4>
                        <a href="{{ route('detail-paket-a') }}">Program Terpadu Aprila Academy</a>
                    </h4>
                    <p>Program paket pembelajaran terpadu untuk mendukung perkembangan akademik dan keterampilan anak.</p>
                    <ul class="course-info">
                        <li>
                            <i class="ti-book"></i>
                            <span>60 Pertemuan</span>
                        </li>

                        <li>
                            <i class="ti-alarm-clock"></i>
                            <span>60-90 Menit / Pertemuan</span>
                        </li>

                        <li>
                            <i class="ti-calendar"></i>
                            <span>3x sepekan</span>
                        </li>
                    </ul>




                    <a href="{{ route('detail-paket-a') }}" class="btn btn-primary btn-block">
                        Lihat Detail
                    </a>

                </div>
            </div>
        </div><!--- END CONTAINER -->
    </section>
    <!-- END COURSE KIDS -->
@endsection
