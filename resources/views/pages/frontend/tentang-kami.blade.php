@extends('layouts.frontend')
@section('title')
    Tentang Kami
@endsection
@section('content')
    <!-- START SECTION TOP -->
    <section class="section-top"
        style="background-image: url('{{ asset('frontend/assets/img/bg-2.png') }}');
           background-size: cover;
           background-position: center;
           background-repeat: no-repeat;">
        <div class="container">
            <div class="col-lg-10 offset-lg-1 text-center">
                <div class="section-top-title wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">
                    <h1>Tentang Kami</h1>
                    <ul>
                        <li><a href="{{ route('welcome') }}">Beranda</a></li>
                        <li> / Tentang Kami</li>
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
                        <img src="{{ asset('frontend/assets/img/logo-aprila1.png') }}" class="img-fluid"
                            alt="Tentang Aprila">
                    </div>
                </div>

                <div class="col-lg-6 col-sm-12 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s"
                    data-wow-offset="0">
                    <div class="ab_content">
                        <h2>Tentang Yayasan Aprila Indonesia</h2>

                        <p>
                            Yayasan Aprila Indonesia merupakan lembaga yang bergerak di bidang pendidikan,
                            pelatihan, dan pemberdayaan masyarakat dengan komitmen menciptakan sumber daya
                            manusia yang berkualitas, mandiri, dan berdaya saing. Kami percaya bahwa
                            pendidikan merupakan fondasi utama dalam membangun kehidupan yang lebih baik
                            bagi setiap individu dan masyarakat.
                        </p>

                        <p>
                            Melalui berbagai program pendidikan kesetaraan, pelatihan keterampilan,
                            pengembangan kompetensi kerja, serta kegiatan sosial dan pemberdayaan,
                            Yayasan Aprila Indonesia hadir sebagai mitra masyarakat dalam meningkatkan
                            kualitas hidup, membuka peluang kerja, dan mendorong lahirnya generasi yang
                            inovatif, produktif, serta mampu menghadapi tantangan perkembangan zaman.
                        </p>

                        {{-- <ul>
                            <li>
                                <span class="ti-check"></span>
                                Menyelenggarakan pendidikan dan pelatihan yang berkualitas, inklusif, dan mudah diakses
                                masyarakat.
                            </li>

                            <li>
                                <span class="ti-check"></span>
                                Mengembangkan keterampilan dan kompetensi yang relevan dengan kebutuhan dunia kerja dan
                                kewirausahaan.
                            </li>

                            <li>
                                <span class="ti-check"></span>
                                Mendorong pemberdayaan masyarakat melalui inovasi, kolaborasi, dan pengembangan potensi
                                lokal.
                            </li>
                        </ul> --}}
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
                                <img src="{{ asset('frontend/assets/img/logo-aprila.png') }}" class="img-fluid" alt="Tentang Aprila"
                                    style="width: 420px;">
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

    <!-- START ORGANIZATION -->
    <section class="organization_area section-padding bg-light">
        <div class="container">

            <div class="section-title text-center mb-5">
                <h2>Struktur Organisasi</h2>
                <p class="text-muted">
                    Struktur organisasi Yayasan Aprila Indonesia yang mendukung
                    penyelenggaraan pendidikan, pelatihan, dan pemberdayaan masyarakat.
                </p>
            </div>

            <div class="row justify-content-center">

                <div class="col-lg-10">

                    <div class="organization-card">

                        <div class="text-center">
                            <img src="{{ asset('frontend/assets/img/Struktur Aprila 2026.png') }}"
                                class="img-fluid rounded shadow-sm" alt="Struktur Organisasi" style="height: 860px;">
                        </div>

                    </div>

                </div>

            </div>

        </div>
    </section>
    <!-- END ORGANIZATION -->
@endsection
