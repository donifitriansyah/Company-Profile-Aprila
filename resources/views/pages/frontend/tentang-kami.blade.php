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
                        <h2>Tentang Aprila</h2>
                        <p>Aprila adalah lembaga pendidikan dan pelatihan yang berkomitmen membuka akses belajar,
                            meningkatkan keterampilan, serta mendorong kemandirian masyarakat melalui pendekatan yang
                            inklusif, praktis, dan berorientasi masa depan.</p>
                        <p>Kami percaya bahwa setiap individu memiliki potensi untuk tumbuh dan berkembang. Karena itu,
                            Aprila hadir sebagai ruang belajar, berkarya, dan membangun masa depan yang lebih baik melalui
                            pendidikan, pelatihan, dan pemberdayaan.</p>
                        <ul>
                            <li><span class="ti-check"></span> Berkomitmen pada pendidikan yang inklusif dan bermanfaat
                            </li>
                            <li><span class="ti-check"></span> Mengembangkan keterampilan yang relevan dengan kebutuhan
                                zaman</li>
                            <li><span class="ti-check"></span> Mendukung terwujudnya masyarakat yang mandiri dan produktif
                            </li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END ABOUT APRILA -->

    <section class="ab_area section-padding py-8"
        style="background-image: url('{{ asset('frontend/assets/img/bg/background3.png') }}');
           background-size: cover;
           background-position: center;
           background-repeat: no-repeat;">
        <div class="container">

            <!-- HEADER -->
            <div class="text-center mb-5 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s"
                    data-wow-offset="0">
                <h2 class="fw-bold">Program Pendidikan & Pelatihan</h2>
                <p class="text-muted">
                    Aprila menyelenggarakan program pendidikan dan pelatihan untuk meningkatkan keterampilan,
                    kompetensi, dan kemandirian masyarakat.
                </p>
            </div>

            <!-- ROW START -->
            <div class="row g-4">

                <!-- ===================== PAKET A ===================== -->
                <div class="col-md-4 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s"
                    data-wow-offset="0">
                    <div class="card border-0 shadow-sm h-100 program-card">

                        {{-- <img src="{{ asset('frontend/assets/img/program/paket-a.jpg') }}" class="card-img-top"
                            alt="Paket A"> --}}

                        <div class="card-body text-center">
                            <i class="fa-solid fa-school fa-2x text-primary mb-2"></i>
                            <h5>Paket A (Setara SD)</h5>
                            <p class="text-muted small">
                                Pendidikan dasar kesetaraan untuk membangun fondasi literasi masyarakat.
                            </p>
                        </div>

                    </div>
                </div>

                <!-- ===================== PAKET B ===================== -->
                <div class="col-md-4 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s"
                    data-wow-offset="0">
                    <div class="card border-0 shadow-sm h-100 program-card">

                        {{-- <img src="{{ asset('frontend/assets/img/program/paket-b.jpg') }}" class="card-img-top"
                            alt="Paket B"> --}}

                        <div class="card-body text-center">
                            <i class="fa-solid fa-book-open-reader fa-2x text-primary mb-2"></i>
                            <h5>Paket B (Setara SMP)</h5>
                            <p class="text-muted small">
                                Program pendidikan lanjutan untuk penguatan kompetensi dasar.
                            </p>
                        </div>

                    </div>
                </div>

                <!-- ===================== PAKET C ===================== -->
                <div class="col-md-4 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s"
                    data-wow-offset="0">
                    <div class="card border-0 shadow-sm h-100 program-card">

                        {{-- <img src="{{ asset('frontend/assets/img/program/paket-c.jpg') }}" class="card-img-top"
                            alt="Paket C"> --}}

                        <div class="card-body text-center">
                            <i class="fa-solid fa-building-columns fa-2x text-primary mb-2"></i>
                            <h5>Paket C (Setara SMA)</h5>
                            <p class="text-muted small">
                                Persiapan pendidikan menengah menuju dunia kerja dan perguruan tinggi.
                            </p>
                        </div>

                    </div>
                </div>

                <!-- ===================== DIGITAL SKILL ===================== -->
                <div class="col-md-4 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.6s"
                    data-wow-offset="0">
                    <div class="card border-0 shadow-sm h-100 program-card">

                        {{-- <img src="{{ asset('frontend/assets/img/program/digital-skill.jpg') }}" class="card-img-top"
                            alt="Digital Skill"> --}}

                        <div class="card-body text-center">
                            <i class="fa-solid fa-laptop-code fa-2x text-success mb-2"></i>
                            <h5>Keterampilan Digital</h5>
                            <p class="text-muted small">
                                Pelatihan komputer, desain grafis, video editing, digital marketing, dan website basic.
                            </p>
                        </div>

                    </div>
                </div>

                <!-- ===================== WIRAUSAHA ===================== -->
                <div class="col-md-4 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.6s"
                    data-wow-offset="0">
                    <div class="card border-0 shadow-sm h-100 program-card">

                        {{-- <img src="{{ asset('frontend/assets/img/program/entrepreneur.jpg') }}" class="card-img-top"
                            alt="Wirausaha"> --}}

                        <div class="card-body text-center">
                            <i class="fa-solid fa-lightbulb fa-2x text-warning mb-2"></i>
                            <h5>Inkubator Wirausaha</h5>
                            <p class="text-muted small">
                                Pengembangan usaha mandiri berbasis komunitas dan ekonomi kreatif.
                            </p>
                        </div>

                    </div>
                </div>

                <!-- ===================== DISABILITAS ===================== -->
                <div class="col-md-4 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.6s"
                    data-wow-offset="0">
                    <div class="card border-0 shadow-sm h-100 program-card">

                        {{-- <img src="{{ asset('frontend/assets/img/program/disability.jpg') }}" class="card-img-top"
                            alt="Disabilitas"> --}}

                        <div class="card-body text-center">
                            <i class="fa-solid fa-hands-holding-child fa-2x text-info mb-2"></i>
                            <h5>Wirausaha Disabilitas</h5>
                            <p class="text-muted small">
                                Program pemberdayaan inklusif untuk penyandang disabilitas.
                            </p>
                        </div>

                    </div>
                </div>

            </div>
            <!-- ROW END -->

        </div>
    </section>


    <!-- CONTENT -->
    <section class="py-5">
        <div class="container">



            <div class="row g-4">

                <!-- CONTENT -->
                <section class="py-5">
                    <div class="container">

                        <!-- HEADER -->
                        <div class="section-title text-center mb-5">

                            <!-- LOGO WRAPPER -->
                            <div class="ab_img mb-3">
                                <img src="{{ asset('frontend/assets/img/logo-aprila1.png') }}" class="img-fluid"
                                    alt="Tentang Aprila" style="width: 320px;">
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
                                    NPSN LKP : K5655040
                                    <span class="mx-2">|</span>
                                    <i class="fa-solid fa-certificate me-1 text-warning"></i>
                                    VIN LEMSAR LPK : 1912611201
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
                                        Menjadi Lembaga Pendidikan & Pelatihan yang handal sebagai penggerak dan
                                        pelayanan untuk meningkatkan kualitas dan produktivitas sumber daya manusia.
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
                                            Menumbuhkan kesadaran pentingnya peningkatan SDM di bidang pendidikan non
                                            formal, kursus, dan pelatihan kerja.
                                        </li>

                                        <li class="mb-2">
                                            <i class="fa-solid fa-check text-success me-2"></i>
                                            Mengembangkan jejaring kerja sama penyaluran tenaga kerja secara koordinatif dan
                                            berkesinambungan.
                                        </li>

                                        <li class="mb-2">
                                            <i class="fa-solid fa-check text-success me-2"></i>
                                            Meningkatkan kapasitas dan kualitas SDM serta profesionalisme tenaga pendidik.
                                        </li>

                                        <li class="mb-0">
                                            <i class="fa-solid fa-check text-success me-2"></i>
                                            Melakukan penelitian untuk pengembangan metode pendidikan dan pelatihan berbasis
                                            teknologi.
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
@endsection
