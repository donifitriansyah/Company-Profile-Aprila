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
                    <h1>Production House Aprila</h1>
                    <ul>
                        <li><a href="{{ route('welcome') }}">Beranda</a></li>
                        <li> / Production House</li>
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
                        <img src="{{ asset('frontend/assets/img/Production House Potrait.png') }}" class="img-fluid"
                            alt="Tentang Aprila">
                    </div>
                </div>

                <div class="col-lg-6 col-sm-12 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s"
                    data-wow-offset="0">
                    <div class="ab_content">
                        <h2>Tentang Production House Aprila</h2>

                        <p>
                            Production House Aprila merupakan penyedia layanan produksi kreatif yang
                            berfokus pada pembuatan konten visual dan digital berkualitas untuk
                            mendukung kebutuhan promosi, branding, dokumentasi, serta komunikasi
                            bisnis. Beroperasi di wilayah Kubu Raya dan Kota Pontianak, kami
                            menghadirkan solusi kreatif yang disesuaikan dengan kebutuhan individu,
                            UMKM, perusahaan, instansi pemerintah, maupun lembaga pendidikan.
                        </p>

                        <p>
                            Dengan didukung tim yang berpengalaman serta peralatan produksi yang
                            memadai, Production House Aprila berkomitmen menghasilkan karya yang
                            profesional, inovatif, dan tepat sasaran. Mulai dari proses perencanaan,
                            produksi, hingga pascaproduksi, setiap proyek dikerjakan dengan
                            mengutamakan kualitas, kreativitas, dan kepuasan klien.
                        </p>

                        <ul>
                            <li><span class="ti-check"></span> Produksi Video Company Profile, Promosi, dan Dokumentasi</li>
                            <li><span class="ti-check"></span> Fotografi Produk, Event, dan Branding</li>
                            <li><span class="ti-check"></span> Editing Video, Motion Graphic, dan Konten Media Sosial</li>
                            <li><span class="ti-check"></span> Layanan Kreatif yang Fleksibel Sesuai Kebutuhan Klien</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END ABOUT APRILA -->


    <!-- CONTENT -->
    {{-- <section class="py-5"
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
                                <img src="{{ asset('frontend/assets/img/Production.png') }}" class="img-fluid"
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
    </section> --}}

    <section class="why_aprila section-padding"
        style="background-image: url('{{ asset('frontend/assets/img/bg/sect-lyn.png') }}'); background-size: cover; background-position: center center;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 col-sm-12 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">
                    <div class="why_aprila_intro">
                        <span class="why_tag">Why Choose Us</span>
                        <h2>Mengapa Memilih Aprila Production?</h2>
                        <p>
                            Aprila Production hadir sebagai mitra kreatif yang membantu
                            individu, UMKM, perusahaan, dan instansi menghadirkan konten visual
                            berkualitas untuk memperkuat branding, promosi, dan komunikasi
                            digital secara profesional.
                        </p>
                    </div>
                </div>

                <div class="col-lg-7 col-sm-12 col-xs-12">
                    <div class="why_aprila_list">
                        <div class="why_item wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                            <div class="why_number">01</div>
                            <div class="why_text">
                                <h3>Tim Kreatif Profesional</h3>
                                <p>
                                    Didukung oleh tim yang berpengalaman dalam produksi konten,
                                    desain visual, fotografi, dan videografi untuk menghasilkan
                                    karya yang berkualitas.
                                </p>
                            </div>
                        </div>

                        <div class="why_item wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s">
                            <div class="why_number">02</div>
                            <div class="why_text">
                                <h3>Hasil Berkualitas</h3>
                                <p>
                                    Mengutamakan kreativitas, ketelitian, dan konsistensi agar
                                    setiap proyek memiliki hasil yang profesional dan sesuai
                                    dengan identitas brand.
                                </p>
                            </div>
                        </div>

                        <div class="why_item wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                            <div class="why_number">03</div>
                            <div class="why_text">
                                <h3>Layanan Fleksibel</h3>
                                <p>
                                    Solusi produksi yang dapat disesuaikan dengan kebutuhan,
                                    anggaran, dan tujuan promosi setiap klien.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- START LAYANAN APRILA -->
    <section class="ab_area section-padding">
        <div class="container">
            <div class="section-title text-center">
                <h2>Layanan Production House Aprila</h2>
            </div>

            <div class="row">

                <div class="col-lg-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">
                    <div class="single_tp">
                        <span class="tp_icon"><i class="fa-solid fa-graduation-cap"></i></span>
                        <h3>Desain Visual & Branding</h3>
                        <p>Menyediakan layanan desain logo, identitas merek, materi promosi, dan berbagai kebutuhan visual
                            untuk membangun citra bisnis yang profesional.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                    <div class="single_tp">
                        <span class="tp_icon"><i class="fa-solid fa-computer"></i></span>
                        <h3>Creative & Media Production</h3>
                        <p>Melayani produksi foto dan video profesional untuk company profile, promosi, dokumentasi
                            kegiatan, serta kebutuhan media digital.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s">
                    <div class="single_tp">
                        <span class="tp_icon"><i class="fa-solid fa-pen-nib"></i></span>
                        <h3>Digital Content Management</h3>
                        <p>Mengelola perencanaan, pembuatan, dan publikasi konten digital yang kreatif, konsisten, dan
                            sesuai dengan strategi komunikasi brand.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                    <div class="single_tp">
                        <span class="tp_icon"><i class="fa-solid fa-chart-line"></i></span>
                        <h3>Marketplace Management</h3>
                        <p>Membantu pengelolaan toko online melalui optimasi katalog produk, desain visual, promosi, dan
                            strategi penjualan di berbagai marketplace.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.6s">
                    <div class="single_tp">
                        <span class="tp_icon"><i class="fa-solid fa-microphone"></i></span>
                        <h3>Administrasi & Virtual Staff</h3>
                        <p>Menyediakan layanan administrasi digital dan virtual staff untuk membantu operasional bisnis,
                            pengelolaan data, serta kebutuhan layanan pelanggan.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.7s">
                    <div class="single_tp">
                        <span class="tp_icon"><i class="fa-solid fa-hand-holding-heart"></i></span>
                        <h3>Edu Support Product</h3>
                        <p>Mengembangkan berbagai produk edukasi dan media pembelajaran digital yang inovatif untuk
                            mendukung kegiatan pendidikan, pelatihan, dan pengembangan kompetensi.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- END LAYANAN APRILA -->

    <section class="portfolio_area section-padding bg-light">
        <div class="container">

            <div class="section-title text-center mb-5">
                <h2>Portofolio Kami</h2>
                <p>
                    Beberapa proyek yang telah kami kerjakan untuk mendukung
                    kebutuhan branding, promosi, dan dokumentasi klien.
                </p>
            </div>

            <div class="row">

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="portfolio_item">
                        <img src="{{ asset('frontend/assets/img/Portofolio Company Profile.png') }}" class="img-fluid rounded"
                            alt="">
                        <div class="portfolio_content">
                            <h4>Company Profile</h4>
                            <p>Video company profile untuk perusahaan.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="portfolio_item">
                        <img src="{{ asset('frontend/assets/img/portfolio/event.jpg') }}" class="img-fluid rounded"
                            alt="">
                        <div class="portfolio_content">
                            <h4>Dokumentasi Event</h4>
                            <p>Dokumentasi seminar dan kegiatan instansi.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="portfolio_item">
                        <img src="{{ asset('frontend/assets/img/portfolio/social-media.jpg') }}" class="img-fluid rounded"
                            alt="">
                        <div class="portfolio_content">
                            <h4>Konten Media Sosial</h4>
                            <p>Desain dan video promosi Instagram & TikTok.</p>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <style>
        /* ===========================
       PORTFOLIO
    =========================== */
        .portfolio_area {
            background: #f8f9fc;
        }

        .portfolio_item {
            background: #fff;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 10px 25px rgba(0, 0, 0, .08);
            transition: .35s ease;
            height: 100%;
        }

        .portfolio_item:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, .15);
        }

        .portfolio_item img {
            width: 100%;
            height: 250px;
            object-fit: cover;
            transition: .4s;
        }

        .portfolio_item:hover img {
            transform: scale(1.08);
        }

        .portfolio_content {
            padding: 25px;
        }

        .portfolio_content h4 {
            font-size: 22px;
            font-weight: 700;
            margin-bottom: 10px;
            color: #1d3557;
        }

        .portfolio_content p {
            color: #6c757d;
            line-height: 1.7;
            margin: 0;
        }

        /* Button */
        .portfolio_btn {
            display: inline-block;
            margin-top: 18px;
            color: #0d6efd;
            font-weight: 600;
            text-decoration: none;
            transition: .3s;
        }

        .portfolio_btn:hover {
            color: #084298;
        }

        /* Responsive */
        @media(max-width:768px) {

            .portfolio_item img {
                height: 220px;
            }

            .portfolio_content {
                padding: 20px;
            }

        }
    </style>
@endsection
