@extends('layouts.frontend')
@section('title')
    Computer Kids
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
                    <h1>Detail Computer Kids</h1>
                    <ul>
                        <li><a href="{{ route('welcome') }}">Beranda</a></li>
                        <li> / Detail Computer Kids</li>
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
                            src="{{ asset('frontend/assets/img/course/Computer Kids.png') }}" />
                        <div class="single_event_text_single">
                            <h4>Computer Kids</h4>
                            <span> <i class="ti-book"></i>3 Hari / Minggu</span>
                            <span><i class="ti-alarm-clock"></i>60-90 Menit / Pertemuan</span>
                            <span><i class="ti-calendar"></i>24 Pertemuan</span>

                            <p>
                                Kursus Computer Kids di Yayasan Aprila Indonesia merupakan program pelatihan yang dirancang
                                khusus untuk memperkenalkan teknologi komputer kepada anak-anak sejak usia dini melalui
                                metode pembelajaran yang menyenangkan, interaktif, dan mudah dipahami. Program ini bertujuan
                                menumbuhkan minat, kreativitas, serta kemampuan dasar anak dalam memanfaatkan teknologi
                                secara
                                positif.
                            </p>

                            <p>
                                Peserta akan mempelajari pengenalan perangkat komputer, penggunaan sistem operasi, mengetik
                                dasar, pengolahan dokumen sederhana, menggambar digital, presentasi interaktif, penggunaan
                                internet secara aman, serta berbagai permainan edukatif yang mendukung kemampuan berpikir
                                kreatif dan logis. Pembelajaran dilaksanakan melalui kombinasi teori ringan, praktik
                                langsung, aktivitas edukatif, dan pendampingan instruktur sehingga anak-anak dapat belajar dengan
                                nyaman dan menyenangkan.
                            </p>

                            <p>
                                Melalui program ini, peserta diharapkan memiliki keterampilan dasar dalam mengoperasikan
                                komputer, mampu memanfaatkan teknologi sebagai sarana belajar dan berkreasi, serta memiliki
                                bekal literasi digital yang baik untuk mendukung proses pendidikan di masa depan.
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
