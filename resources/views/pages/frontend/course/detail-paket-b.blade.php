@extends('layouts.frontend')
@section('title')
    Paket B - Setara SMP
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
                    <h1>Detail Paket B</h1>
                    <ul>
                        <li><a href="{{ route('welcome') }}">Beranda</a></li>
                        <li> / Detail Paket B</li>
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
                        <img alt="" class="img-fluid" src="{{ asset('frontend/assets/img/course/Paket A.png') }}" />
                        <div class="single_event_text_single">
                            <h4>Paket B - Setara SMP</h4>
                            <span> <i class="ti-book"></i>2–3 Hari / Minggu</span>
                            <i class="ti-book"></i>
                            <span><i class="ti-alarm-clock"></i>60–90 Menit / Pertemuan</span>
                            <span><i class="ti-calendar"></i>Minggu - Senin</span>
                            <span><i class="ti-desktop"></i>Blended Learning</span>
                            <span><i class="ti-user"></i>Pendampingan Tutor</span>

                            <p>
                                Program Paket B PKBM Aprila Indonesia merupakan program pendidikan kesetaraan
                                setara Sekolah Menengah Pertama (SMP) yang ditujukan bagi peserta didik yang ingin melanjutkan
                                atau menyelesaikan pendidikan dasar melalui jalur nonformal.
                            </p>

                            <p>
                                Pembelajaran dilaksanakan dengan pendekatan yang fleksibel melalui kombinasi
                                tatap muka, belajar mandiri, serta pendampingan tutor. Peserta didik akan
                                mendapatkan bimbingan dalam memahami materi pelajaran, mengikuti evaluasi
                                berkala, dan mempersiapkan diri untuk memperoleh ijazah yang diakui secara resmi.
                            </p>

                            <div class="free-program-box">
                                <h4>
                                    🎓 PROGRAM GRATIS PKBM APRILA INDONESIA
                                </h4>

                                <p>
                                    <strong>Gratis biaya pendidikan untuk peserta didik usia 24 tahun ke bawah.</strong>
                                    (S&K Berlaku)
                                </p>

                                <p>
                                    Bagi peserta didik usia 24 tahun ke atas, program ini tetap
                                    <strong>GRATIS bagi yang memenuhi kriteria kurang mampu.</strong>
                                </p>
                            </div>
                            <style>
                                .free-program-box {
                                    background: #f0f8ff;
                                    border-left: 5px solid #007bff;
                                    padding: 20px;
                                    margin: 25px 0;
                                    border-radius: 8px;
                                }

                                .free-program-box h4 {
                                    color: #007bff;
                                    font-weight: 700;
                                    margin-bottom: 15px;
                                }

                                .free-program-box strong {
                                    color: #d9534f;
                                    font-size: 18px;
                                }
                            </style>
                        </div>
                    </div><!--- END SINGLE EVENT -->
                    <div class="course-details-content section-bg">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a href="#overview" class="nav-link active" data-bs-toggle="tab">Metode Pembelajaran</a>
                            </li>

                            <li class="nav-item">
                                <a href="#fasilitas" class="nav-link" data-bs-toggle="tab">Fasilitas dan Ekstrakurikuler</a>
                            </li>
                            <li class="nav-item">
                                <a href="#kesempatan" class="nav-link" data-bs-toggle="tab">Kesempatan</a>
                            </li>
                            <li class="nav-item">
                                <a href="#instructor" class="nav-link" data-bs-toggle="tab">Biaya</a>
                            </li>
                            <li>
                                <a href="#curriculum" class="nav-link" data-bs-toggle="tab">Catatan</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane show fade active" id="overview">
                                <div class="overview">


                                    <h5>Sistem Pembelajaran PKBM Aprila Indonesia</h5>

                                    <p>
                                        PKBM Aprila Indonesia menerapkan sistem pembelajaran yang fleksibel dan berorientasi
                                        pada kebutuhan peserta didik, dengan pendekatan sebagai berikut:
                                    </p>

                                    <ul>
                                        <li>
                                            <strong>Durasi pembelajaran:</strong> 60-90 menit per pertemuan
                                        </li>
                                        <li>
                                            <strong>Frekuensi:</strong> 2-3 kali per minggu (tatap muka & belajar mandiri)
                                        </li>
                                        <li>
                                            <strong>Metode:</strong> Blended Learning (tatap muka dan pendampingan daring
                                            melalui LMS/WhatsApp)
                                        </li>
                                        <li>
                                            <strong>Hari belajar utama:</strong> Minggu - Senin
                                        </li>
                                        <li>
                                            <strong>Pendampingan:</strong> Tutor dan evaluasi berkala
                                        </li>
                                    </ul>
                                    <br>
                                    <p>
                                        Pendekatan ini dirancang untuk mendukung peserta didik agar dapat belajar secara
                                        mandiri, efektif, dan berkelanjutan.
                                    </p>




                                </div>
                            </div>
                            <div class="tab-pane fade" role="tabpanel" id="curriculum">
                                <div class="overview">
                                    <p>
                                    <ol>
                                        <li>Peserta didik di bawah usia 24 tahun dapat memperoleh keringanan biaya sesuai
                                            ketentuan.</li>
                                        <li>Tersedia skema subsidi dan beasiswa bagi peserta didik dari keluarga kurang
                                            mampu.</li>
                                        <li>Informasi detail terkait persyaratan dan ketentuan pembayaran dapat
                                            dikonsultasikan
                                            langsung dengan pihak PKBM Aprila Indonesia di lokasi kantor.</li>
                                    </ol>
                                    </p>

                                </div>
                            </div>
                            <div class="tab-pane fade" id="fasilitas">
                                <div class="overview">
                                    <h2>Fasilitas</h2>
                                    <ol>
                                        <li>Ruang kelas ber-AC yang nyaman dan kondusif</li>
                                        <li>Kelas Full WiFi untuk pembelajaran digital</li>
                                        <li>Akun LMS Aprila untuk akses materi & tugas</li>
                                        <li>Ruang komputer dengan perangkat memadai</li>
                                        <li>Modul pembelajaran lengkap dan terstruktur</li>
                                    </ol>
                                    <h2>Ekstrakurikuler</h2>
                                    <ol>
                                        <li>Aplikasi Perkantoran</li>
                                        <li>Desain Grafis</li>
                                        <li>Editing Video</li>
                                        <li>Digital Marketing</li>
                                        <li>Kewirausahaan</li>
                                    </ol>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="kesempatan">
                                <div class="overview">

                                    <ol>
                                        <li>LEMBAGA KURSUS & PELATIHAN KERJA</li>
                                        <p>Opsi mengikuti pelatihan keterampilan kerja seperti komputer, desain grafis,
                                            video
                                            editing, dan digital marketing</p>
                                        <li>APRILA PRODUCTION</li>
                                        <p>Kesempatan terlibat dalam kegiatan produksi konten, videografi, serta proyek
                                            kreatif
                                            profesional</p>
                                        <li>KLINIK BISNIS</li>
                                        <p>Akses pendampingan wirausaha pemula: branding usaha, desain kemasan, pemasaran, hingga
                                    pengelolaan bisnis</p>
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
                    href="https://wa.me/628996567234?text=Halo%20PKBM%20Aprila%20Indonesia,%20saya%20ingin%20mendaftar%20program%20Paket%20B."
                    target="_blank">
                    Daftar Sekarang
                </a>
            </div>
        </div><!-- END CONTAINER -->

    </section>
    <!-- END COURSE -->
@endsection
