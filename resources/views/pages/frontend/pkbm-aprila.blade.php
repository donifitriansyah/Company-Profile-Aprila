@extends('layouts.frontend')
@section('title')
    PKBM Aprila
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
                    <h1>PKBM APRILA</h1>
                    <ul>
                        <li><a href="{{ route('welcome') }}">Beranda</a></li>
                        <li> / PKBM</li>
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
                        <img src="{{ asset('frontend/assets/img/logo_pkbm_aprila.png') }}" class="img-fluid"
                            alt="Tentang Aprila">
                    </div>
                </div>

                <div class="col-lg-6 col-sm-12 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s"
                    data-wow-offset="0">
                    <div class="ab_content">
                        <h2>Tentang PKBM Aprila</h2>
                        <p>PKBM Aprila adalah pusat pembelajaran berkualitas yang didedikasikan untuk memberikan pendidikan
                            terbaik kepada masyarakat Indonesia. Kami berkomitmen untuk menyediakan lingkungan belajar yang
                            mendukung, inovatif, dan inklusif bagi semua siswa.</p>
                        <p>Kami menyediakan berbagai program pembelajaran yang dirancang untuk memenuhi kebutuhan individu,
                            mulai dari anak-anak hingga orang dewasa. Dengan tenaga pengajar yang berkualitas, kurikulum
                            yang terkini, dan fasilitas yang modern, kami bertekad untuk membantu setiap siswa mencapai
                            potensi penuh mereka.</p>
                        <ul>
                            <li><span class="ti-check"></span> Paket A, B, dan C
                            </li>
                            <li><span class="ti-check"></span> Sistem Ujian</li>
                            <li><span class="ti-check"></span> Harga Terjangkau</li>
                            <li><span class="ti-check"></span> Pembelajaran Online </li>
                            <li><span class="ti-check"></span> Pengajar Tersertifikasi </li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END ABOUT APRILA -->

    <!-- CONTENT -->
    <section class="py-5" style="background-image: url('{{ asset('frontend/assets/img/bg/sect-lyn.png') }}'); background-size: cover; background-position: center center;">
        <div class="container">
            <div class="row g-4">

                <!-- CONTENT -->
                <section class="py-5">
                    <div class="container">

                        <!-- HEADER -->
                        <div class="section-title text-center mb-5">

                            <!-- LOGO WRAPPER -->
                            <div class="ab_img mb-3">
                                <img src="{{ asset('frontend/assets/img/Logo PKBM Landscape.png') }}" class="img-fluid"
                                    alt="Tentang Aprila" style="width: 520px;">
                            </div>

                            <!-- BADGE AKREDITASI -->
                            <div class="d-inline-block px-4 py-2 mb-2 rounded-pill shadow-sm fs-3"
                                style="background: linear-gradient(135deg, #0d6efd, #195287); color: #fff; font-weight: 600;">

                                Terakreditasi B
                            </div>

                            <!-- IDENTITAS -->
                            <div class="mt-2">
                                <p class="text-muted mb-0" style="font-size: 14px; line-height: 1.6;">
                                    <i class="fa-solid fa-id-card me-1 text-primary"></i>
                                    NPSN PKBM : P2970103
                                    <span class="mx-2">|</span>
                                    <i class="fa-solid fa-building-columns me-1 text-success"></i>
                                    Tahun Berdiri : 2007
                                    <span class="mx-2">|</span>
                                    <i class="fa-solid fa-certificate me-1 text-warning"></i>
                                    SK Operasional : 421.9 / 133 / DIKBUD.D / 2019
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
                                        Menjadi Pusat Kegiatan Belajar Masyarakat yang unggul dalam penyelenggaraan
                                        pendidikan kesetaraan dan pembelajaran masyarakat yang inklusif, berkualitas, dan
                                        berdaya guna di Kalimantan Barat.
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
                                            Menyelenggarakan pendidikan kesetaraan Paket A, Paket B, dan Paket C sebagai
                                            alternatif pendidikan formal.
                                        </li>

                                        <li class="mb-2">
                                            <i class="fa-solid fa-check text-success me-2"></i>
                                            Memberikan layanan pembelajaran yang fleksibel dan adaptif sesuai dengan
                                            kebutuhan peserta didik.
                                        </li>

                                        <li class="mb-2">
                                            <i class="fa-solid fa-check text-success me-2"></i>
                                            Mendorong peningkatan literasi, karakter, dan kecakapan hidup peserta didik.
                                        </li>

                                        <li class="mb-0">
                                            <i class="fa-solid fa-check text-success me-2"></i>
                                            Membantu peserta didik agar mampu berdaya guna dan berkontribusi positif di lingkungan masyarakat.
                                        </li>
                                        <li class="mb-0">
                                            <i class="fa-solid fa-check text-success me-2"></i>
                                            Bersinergi dengan instansi dan pihak terkait dalam peningkatan kualitas pendidikan masyarakat.
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

    <!-- START COURSE -->
    <section class="home_course section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-sm-6 col-xs-12">
                    <div class="section-title">
                        <h2>Paket yang tersedia di <br><b>PKBM Aprila</b>.</h2>
                    </div>
                </div><!--- END COL -->
                <div class="col-lg-4 col-sm-6 col-xs-12">
                    <div class="cour_btn">
                        {{-- <a href="course.html" class="btn_one">Daftar Sekarang <i class="ti-arrow-top-right"></i></a> --}}
                    </div>
                </div><!--- END COL -->
            </div><!--- END ROW -->
            <div class="row">
                <div class="course-carousel owl-carousel owl-theme">
                    {{-- Paket A --}}
                    <div class="single_course">

                        <div class="single_c_img">
                            <img src="{{ asset('frontend/assets/img/course/Paket A.png') }}" class="img-fluid"
                                alt="course-image">
                            <span>PKBM</span>
                        </div>


                        <div class="course-rating">
                            <i class="fa fa-star text-warning"></i>
                            <i class="fa fa-star text-warning"></i>
                            <i class="fa fa-star text-warning"></i>
                            <i class="fa fa-star text-warning"></i>
                            <i class="fa fa-star text-warning"></i>
                        </div>


                        <h4>
                            <a href="{{ route('detail-paket-a') }}">Paket A - Setara SD</a>
                        </h4>


                        <ul class="course-info">
                            <li>
                                <i class="ti-book"></i>
                                <span>2–3 Hari / Minggu</span>
                            </li>

                            <li>
                                <i class="ti-alarm-clock"></i>
                                <span>60–90 Menit / Pertemuan</span>
                            </li>

                            <li>
                                <i class="ti-calendar"></i>
                                <span>Minggu & Senin</span>
                            </li>

                            <li>
                                <i class="ti-desktop"></i>
                                <span>Blended Learning</span>
                            </li>

                            <li>
                                <i class="ti-user"></i>
                                <span>Pendampingan Tutor</span>
                            </li>
                        </ul>




                        <a href="{{ route('detail-paket-a') }}" class="btn btn-primary btn-block">
                            Lihat Detail
                        </a>

                    </div>
                    {{-- Paket B --}}
                    <div class="single_course">

                        <div class="single_c_img">
                            <img src="{{ asset('frontend/assets/img/course/Paket B.png') }}" class="img-fluid"
                                alt="course-image">
                            <span>PKBM</span>
                        </div>


                        <div class="course-rating">
                            <i class="fa fa-star text-warning"></i>
                            <i class="fa fa-star text-warning"></i>
                            <i class="fa fa-star text-warning"></i>
                            <i class="fa fa-star text-warning"></i>
                            <i class="fa fa-star text-warning"></i>
                        </div>


                        <h4>
                            <a href="#">Paket B - Setara SMP</a>
                        </h4>


                        <ul class="course-info">
                            <li>
                                <i class="ti-book"></i>
                                <span>2–3 Hari / Minggu</span>
                            </li>

                            <li>
                                <i class="ti-alarm-clock"></i>
                                <span>60–90 Menit / Pertemuan</span>
                            </li>

                            <li>
                                <i class="ti-calendar"></i>
                                <span>Minggu & Senin</span>
                            </li>

                            <li>
                                <i class="ti-desktop"></i>
                                <span>Blended Learning</span>
                            </li>

                            <li>
                                <i class="ti-user"></i>
                                <span>Pendampingan Tutor</span>
                            </li>
                        </ul>



                        <a href="#" class="btn btn-primary btn-block">
                            Lihat Detail
                        </a>

                    </div>
                    {{-- Paket C --}}
                    <div class="single_course">

                        <div class="single_c_img">
                            <img src="{{ asset('frontend/assets/img/course/Paket C.png') }}" class="img-fluid"
                                alt="course-image">
                            <span>PKBM</span>
                        </div>


                        <div class="course-rating">
                            <i class="fa fa-star text-warning"></i>
                            <i class="fa fa-star text-warning"></i>
                            <i class="fa fa-star text-warning"></i>
                            <i class="fa fa-star text-warning"></i>
                            <i class="fa fa-star text-warning"></i>
                        </div>


                        <h4>
                            <a href="#">Paket C - Setara SMA</a>
                        </h4>


                        <ul class="course-info">
                            <li>
                                <i class="ti-book"></i>
                                <span>2–3 Hari / Minggu</span>
                            </li>

                            <li>
                                <i class="ti-alarm-clock"></i>
                                <span>60–90 Menit / Pertemuan</span>
                            </li>

                            <li>
                                <i class="ti-calendar"></i>
                                <span>Minggu & Senin</span>
                            </li>

                            <li>
                                <i class="ti-desktop"></i>
                                <span>Blended Learning</span>
                            </li>

                            <li>
                                <i class="ti-user"></i>
                                <span>Pendampingan Tutor</span>
                            </li>
                        </ul>



                        <a href="#" class="btn btn-primary btn-block">
                            Lihat Detail
                        </a>

                    </div>



                </div>

            </div><!--- END ROW -->
        </div><!--- END CONTAINER -->
    </section>
    <!-- END COURSE -->

    <!-- START TEAM -->
    <section class="team_area section-padding">
        <div class="container">

            <div class="section-title text-center">
                <h2>Tenaga Pendidik / Tutor <b>PKBM Aprila</b></h2>
            </div>

            <div class="row">

                @forelse($instructors as $ins)
                    <div class="col-lg-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s">

                        <div class="our-team shadow">

                            <div class="team-content">

                                <a href="#">
                                    <img src="{{ asset('storage/' . $ins->photo) }}" alt="{{ $ins->name }}">
                                </a>

                            </div>

                            <div class="team-prof">
                                <h3>{{ $ins->name }}</h3>
                                <span>{{ $ins->position }}</span>
                            </div>

                        </div>

                    </div>

                @empty

                    <div class="col-12 text-center">
                        <p>Tidak ada data instruktur</p>
                    </div>
                @endforelse

            </div>

        </div>
    </section>
    <!-- END TEAM -->

    <!-- START TESTIMONIALS -->
    {{-- <section class=" section-padding"
        style="background-image: url('{{ asset('frontend/assets/img/bg/background3.png') }}'); background-size: cover; background-position: center center;">
        <div class="container">
            <div class="section-title">
                <h2>Apa Kata Mereka <br />Tentang PKBM Aprila</h2>
            </div>
            <div class="row">
                <div class="col-lg-6 col-sm-12 col-xs-12">
                    <div class="ab_img">
                        <img src="{{ asset('frontend/assets/img/stars3d.png') }}" class="img-fluid" alt="image">
                    </div>
                </div><!-- END COL -->
                <div class="col-lg-6 col-sm-12 col-xs-12">
                    <div id="testimonial-slider" class="owl-carousel">
                        <div class="testimonial">
                            <img src="assets/img/quote.png" alt="" />
                            <div class="testimonial_content">
                                <i class="ti-star"></i>
                                <i class="ti-star"></i>
                                <i class="ti-star"></i>
                                <i class="ti-star"></i>
                                <i class="ti-star"></i>
                                <p>Aqestic optio amet a ququam saepe aliquid voluate dicta fuga dolor saerror sed earum
                                    a magni soluta quam minus dolor dolor sed earum a magni soluta autem dolor error
                                    error sit quam minus sint rem a rerum dolobus veritatis delectus.</p>
                            </div>
                            <div class="testi_pic_title">
                                <img src="assets/img/testimonial/1.png" alt="">
                                <h4>Ajmain Adil</h4>
                                <p>Groton Inc</p>
                            </div>
                        </div><!-- END TESTIMONIAL -->
                        <div class="testimonial">
                            <img src="assets/img/quote.png" alt="" />
                            <div class="testimonial_content">
                                <i class="ti-star"></i>
                                <i class="ti-star"></i>
                                <i class="ti-star"></i>
                                <i class="ti-star"></i>
                                <i class="ti-star"></i>
                                <p>Aqestic optio amet a ququam saepe aliquid voluate dicta fuga dolor saerror sed earum
                                    a magni soluta quam minus dolor dolor sed earum a magni soluta autem dolor error
                                    error sit quam minus sint rem a rerum dolobus veritatis delectus.</p>
                            </div>
                            <div class="testi_pic_title">
                                <img src="assets/img/testimonial/2.png" alt="">
                                <h4>Sharukh Khan</h4>
                                <p>Red Chili Inc</p>
                            </div>
                        </div><!-- END TESTIMONIAL -->
                        <div class="testimonial">
                            <img src="assets/img/quote.png" alt="" />
                            <div class="testimonial_content">
                                <i class="ti-star"></i>
                                <i class="ti-star"></i>
                                <i class="ti-star"></i>
                                <i class="ti-star"></i>
                                <i class="ti-star"></i>
                                <p>Aqestic optio amet a ququam saepe aliquid voluate dicta fuga dolor saerror sed earum
                                    a magni soluta quam minus dolor dolor sed earum a magni soluta autem dolor error
                                    error sit quam minus sint rem a rerum dolobus veritatis delectus.</p>
                            </div>
                            <div class="testi_pic_title">
                                <img src="assets/img/testimonial/3.png" alt="">
                                <h4>Anushka sharma</h4>
                                <p>Naika Company</p>
                            </div>
                        </div><!-- END TESTIMONIAL -->
                        <div class="testimonial">
                            <img src="assets/img/quote.png" alt="" />
                            <div class="testimonial_content">
                                <i class="ti-star"></i>
                                <i class="ti-star"></i>
                                <i class="ti-star"></i>
                                <i class="ti-star"></i>
                                <i class="ti-star"></i>
                                <p>Aqestic optio amet a ququam saepe aliquid voluate dicta fuga dolor saerror sed earum
                                    a magni soluta quam minus dolor dolor sed earum a magni soluta autem dolor error
                                    error sit quam minus sint rem a rerum dolobus veritatis delectus.</p>
                            </div>
                            <div class="testi_pic_title">
                                <img src="assets/img/testimonial/4.png" alt="">
                                <h4>Ajmain Adil</h4>
                                <p>Groton Inc</p>
                            </div>
                        </div><!-- END TESTIMONIAL -->
                        <div class="testimonial">
                            <img src="assets/img/quote.png" alt="" />
                            <div class="testimonial_content">
                                <i class="ti-star"></i>
                                <i class="ti-star"></i>
                                <i class="ti-star"></i>
                                <i class="ti-star"></i>
                                <i class="ti-star"></i>
                                <p>Aqestic optio amet a ququam saepe aliquid voluate dicta fuga dolor saerror sed earum
                                    a magni soluta quam minus dolor dolor sed earum a magni soluta autem dolor error
                                    error sit quam minus sint rem a rerum dolobus veritatis delectus.</p>
                            </div>
                            <div class="testi_pic_title">
                                <img src="assets/img/testimonial/5.png" alt="">
                                <h4>Ajmain Adil</h4>
                                <p>Groton Inc</p>
                            </div>
                        </div><!-- END TESTIMONIAL -->
                    </div><!-- END TESTIMONIAL SLIDER -->
                </div><!-- END COL -->
            </div><!--- END ROW -->
        </div><!--- END CONTAINER -->
    </section> --}}
    <!-- END TESTIMONIALS -->
@endsection
