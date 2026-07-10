@extends('layouts.frontend')
@section('title')
    Public Speaking
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
                    <h1>Detail Public Speaking</h1>
                    <ul>
                        <li><a href="{{ route('welcome') }}">Beranda</a></li>
                        <li> / Detail Public Speaking</li>
                    </ul>
                </div><!-- //.HERO-TEXT -->
            </div><!--- END COL -->
        </div><!--- END CONTAINER -->
    </section>
    <!-- END SECTION TOP -->

    <!-- START COURSE -->
    <section class="our_event section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-sm-12 col-xs-12">
                    <div class="single_event_single">
                        <img alt="" class="img-fluid"
                            src="{{ asset('frontend/assets/img/course/Public Speaking.png') }}" />
                        <div class="single_event_text_single">
                            <h4>Public Speaking</h4>
                            <span> <i class="ti-book"></i>3 Hari / Minggu</span>
                            <i class="ti-book"></i>
                            <span><i class="ti-alarm-clock"></i>90 Menit / Pertemuan</span>
                            <span><i class="ti-calendar"></i>12 Pertemuan</span>
                            <p>
                                Kursus Public Speaking di Yayasan Aprila Indonesia merupakan program pelatihan yang
                                dirancang
                                untuk mengembangkan kemampuan peserta dalam berbicara di depan umum secara percaya diri,
                                efektif, dan komunikatif. Program ini bertujuan membantu peserta meningkatkan keterampilan
                                komunikasi yang dibutuhkan dalam dunia pendidikan, organisasi, bisnis, maupun dunia kerja.
                            </p>
                            <p>
                                Peserta akan mempelajari dasar-dasar public speaking, teknik mengatasi rasa gugup,
                                penyusunan materi presentasi, penggunaan bahasa tubuh (body language), intonasi dan
                                artikulasi suara, teknik persuasi, komunikasi interpersonal, hingga praktik berbicara
                                di depan audiens. Pembelajaran dilaksanakan melalui kombinasi teori, simulasi, praktik
                                langsung, serta evaluasi sehingga peserta memperoleh pengalaman belajar yang aplikatif
                                dan mampu meningkatkan rasa percaya diri.
                            </p>
                            <p>
                                Melalui program ini, peserta diharapkan mampu menyampaikan ide dan informasi secara jelas,
                                menarik, dan meyakinkan, memiliki kemampuan presentasi yang profesional, serta siap
                                menerapkan keterampilan public speaking dalam dunia akademik, organisasi, pekerjaan,
                                maupun kegiatan kewirausahaan.
                            </p>
                        </div>
                    </div><!--- END SINGLE EVENT -->
                    <div class="course-details-content section-bg">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a href="#fasilitas" class="nav-link active" data-bs-toggle="tab">Fasilitas</a>
                            </li>
                            <li class="nav-item">
                                <a href="#instructor" class="nav-link" data-bs-toggle="tab">Biaya</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane show fade active" id="fasilitas">
                                <div class="overview">
                                    <p>Fasilitas :</p>
                                    <ol>
                                        <li>Ruang kelas ber-AC yang nyaman dan kondusif</li>
                                        <li>Kelas Full WiFi untuk pembelajaran digital</li>
                                        <li>Akun LMS Aprila untuk akses materi & tugas</li>
                                        <li>Ruang komputer dengan perangkat memadai</li>
                                        <li>Modul pembelajaran lengkap dan terstruktur</li>
                                    </ol>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="instructor">
                                <div class="overview">
                                    <p>Untuk Informasi Biaya Hubungi Admin Kami <a href="https://wa.me/628996567234?text=Halo%20Admin%20Aprila%20Indonesia,%20saya%20ingin%20bertanya%20biaya">Admin Aprila</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--- END COL -->
            </div><!-- END ROW -->
            <br>
            <div class="event_info_register">
                <a class="btn_one"
                    href="https://wa.me/628996567234?text=Halo%20PKBM%20Aprila%20Indonesia,%20saya%20ingin%20mendaftar%20program%20Pelatihan%20Aprila%20"
                    target="_blank">
                    Daftar Sekarang
                </a>
            </div>
        </div><!-- END CONTAINER -->

    </section>
    <!-- END COURSE -->
@endsection
