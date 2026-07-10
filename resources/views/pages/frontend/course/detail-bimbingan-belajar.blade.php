@extends('layouts.frontend')
@section('title')
    Bimbingan Belajar
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
                    <h1>Detail Bimbingan Belajar</h1>
                    <ul>
                        <li><a href="{{ route('welcome') }}">Beranda</a></li>
                        <li> / Detail Bimbingan Belajar</li>
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
                            src="{{ asset('frontend/assets/img/course/Bimbingan Belajar.png') }}" />
                        <div class="single_event_text_single">
                            <h4>Bimbingan Belajar</h4>
                            <span><i class="ti-calendar"></i>Pertemuan Rutin</span>

                            <p>
                                Kursus Bimbingan Belajar (Bimbel) di Yayasan Aprila Indonesia merupakan program pendampingan
                                belajar yang dirancang untuk membantu peserta didik meningkatkan pemahaman materi pelajaran,
                                mengembangkan kemampuan berpikir kritis, serta meraih prestasi akademik yang lebih baik.
                                Program ini diselenggarakan dengan metode pembelajaran yang efektif, interaktif, dan
                                disesuaikan dengan kebutuhan serta tingkat kemampuan masing-masing peserta.
                            </p>

                            <p>
                                Peserta akan mendapatkan bimbingan pada berbagai mata pelajaran sesuai jenjang pendidikan,
                                seperti Matematika, Bahasa Indonesia, Bahasa Inggris, Ilmu Pengetahuan Alam (IPA), Ilmu
                                Pengetahuan Sosial (IPS), dan mata pelajaran lainnya. Pembelajaran dilaksanakan melalui
                                penjelasan materi, latihan soal, diskusi, evaluasi berkala, serta pendampingan oleh tutor
                                yang berpengalaman sehingga peserta dapat memahami materi dengan lebih mudah dan percaya
                                diri dalam menghadapi tugas maupun ujian.
                            </p>

                            <p>
                                Melalui program ini, peserta diharapkan mampu meningkatkan pemahaman terhadap materi
                                pelajaran, memperoleh hasil belajar yang lebih optimal, membangun kebiasaan belajar yang
                                disiplin, serta memiliki bekal pengetahuan dan keterampilan akademik yang kuat untuk
                                menunjang keberhasilan di sekolah maupun jenjang pendidikan berikutnya.
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
