@extends('layouts.frontend')
@section('title')
    Beranda
@endsection
@section('content')
    <section class="home_bg hb_height"
        style="background-image: url('{{ asset('frontend/assets/img/bg-2.png') }}');
           background-size: cover;
           background-position: center;
           background-repeat: no-repeat;">
        <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel">

            <div class="carousel-inner">

                <!-- SLIDE 1 -->
                <div class="carousel-item active">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 col-sm-12">
                                <div class="hero-text ht_top">
                                    <h1>APRILA INDONESIA</h1>
                                    <h2>Terampil | Mandiri | Kompeten</h2>
                                </div>
                            </div>

                            <div class="col-lg-6 col-sm-12">
                                <div class="hero-text-img">
                                    <img src="{{ asset('frontend/assets/img/hero-2.png') }}" style="right: 10%"
                                        class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 col-sm-12">
                                <div class="hero-text ht_top">
                                    <h1>Lembaga Pendidikan Non Formal & Informal </h1>
                                    <p>Kursus Offline dan Online bersertifikasi terbaik dengan layanan luas dari lembaga
                                        kursus resmi</p>
                                </div>
                            </div>

                            <div class="col-lg-6 col-sm-12">
                                <div class="hero-text-img">
                                    <img src="{{ asset('frontend/assets/img/lp.png') }}" class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- SLIDE 2 -->
                <div class="carousel-item">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 col-sm-12">
                                <div class="hero-text ht_top">
                                    <h1>Sekolah Paket A, B, dan C</h1>
                                    <p>Platform pembelajaran digital dengan sistem ujian modern dan materi lengkap</p>
                                </div>
                            </div>

                            <div class="col-lg-6 col-sm-12">
                                <div class="hero-text-img">
                                    <img src="{{ asset('frontend/assets/img/abc.png') }}" class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 col-sm-12">
                                <div class="hero-text ht_top">
                                    <h1>Kewirausahaan</h1>
                                    <p>Program Kewirausahaan membantu peserta membangun pola pikir mandiri,
                                        kreatif, dan inovatif dalam menciptakan peluang usaha. Kami membimbing dari dasar
                                        hingga praktik nyata agar setiap peserta mampu mengembangkan usaha yang
                                        berkelanjutan.</p>
                                </div>
                            </div>

                            <div class="col-lg-6 col-sm-12">
                                <div class="hero-text-img">
                                    <img src="{{ asset('frontend/assets/img/kewirausahaan.png') }}" class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 col-sm-12">
                                <div class="hero-text ht_top">
                                    <h1>Kursus Komputer</h1>
                                    <p>Kursus Komputer dirancang untuk meningkatkan literasi
                                        digital dan keterampilan teknologi. Peserta akan dibekali kemampuan praktis yang
                                        dibutuhkan di era digital, mulai dari dasar hingga tingkat lanjutan.</p>
                                </div>
                            </div>

                            <div class="col-lg-6 col-sm-12">
                                <div class="hero-text-img">
                                    <img src="{{ asset('frontend/assets/img/hero-kursus.png') }}" class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 col-sm-12">
                                <div class="hero-text ht_top">
                                    <h1>Production House</h1>
                                    <p>Production House (PH) PKBM Aprila memproduksi konten kreatif berupa video, desain,
                                        dan media digital untuk kebutuhan anda.</p>
                                </div>
                            </div>

                            <div class="col-lg-6 col-sm-12">
                                <div class="hero-text-img">
                                    <img src="{{ asset('frontend/assets/img/ph.png') }}" class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 col-sm-12">
                                <div class="hero-text ht_top">
                                    <h1>Klinik Bisnis</h1>
                                    <p>Klinik Bisnis Aprila memberikan pendampingan bagi calon pelaku usaha dalam
                                        mengembangkan ide bisnis menjadi usaha nyata. Kami membantu dari perencanaan,
                                        strategi, hingga pengembangan usaha agar lebih siap bersaing di dunia industri.</p>
                                </div>
                            </div>

                            <div class="col-lg-6 col-sm-12">
                                <div class="hero-text-img">
                                    <img src="{{ asset('frontend/assets/img/kb.png') }}" class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- OPTIONAL NAV -->
            <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>

            <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>

        </div>
    </section>
    <!-- END  HOME -->

    <!-- START COUNTER -->
    <section class="count_area counter_feature">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6 col-xs-12">
                    <div class="single-counter">
                        <span class="ti-folder sc_one"></span>
                        <h2 class="counter-num">134</h2>
                        <p>Our Online Course</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-xs-12">
                    <div class="single-counter">
                        <span class="ti-medall-alt sc_two"></span>
                        <h2 class="counter-num">299</h2>
                        <p>Academic Programs</p>
                    </div>
                </div><!-- END COL -->
                <div class="col-lg-3 col-sm-6 col-xs-12">
                    <div class="single-counter">
                        <span class="ti-id-badge sc_three"></span>
                        <h2 class="counter-num">684</h2>
                        <p>Certified Students</p>
                    </div>
                </div><!-- END COL -->
                <div class="col-lg-3 col-sm-6 col-xs-12">
                    <div class="single-counter">
                        <span class="ti-user sc_four"></span>
                        <h2 class="counter-num">4000+</h2>
                        <p>Siswa Terdaftar</p>
                    </div>
                </div><!-- END COL -->
            </div><!--- END ROW -->
        </div><!--- END CONTAINER -->
    </section>
    <!-- END COUNTER -->

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

    <!-- START LAYANAN APRILA -->
    <section class="home_course top_cat__area section-padding"
        style="background-image: url('{{ asset('frontend/assets/img/bg/sect-lyn.png') }}'); background-size: cover; background-position: center center;">
        <div class="container">
            <div class="section-title text-center">
                <h2>Layanan Aprila</h2>
                <p>Aprila menyediakan berbagai program pendidikan, pelatihan, dan pemberdayaan untuk membantu masyarakat
                    meningkatkan kompetensi, memperluas peluang, dan meraih masa depan yang lebih baik.</p>
            </div>

            <div class="row">

                <div class="col-lg-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">
                    <div class="single_tp">
                        <span class="tp_icon"><i class="fa-solid fa-graduation-cap"></i></span>
                        <h3>Pendidikan <br />Kesetaraan</h3>
                        <p>Menyediakan program Paket A, Paket B, dan Paket C sebagai solusi pendidikan setara SD, SMP, dan
                            SMA bagi masyarakat.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                    <div class="single_tp">
                        <span class="tp_icon"><i class="fa-solid fa-computer"></i></span>
                        <h3>Aplikasi Perkantoran <br />& Komputer</h3>
                        <p>Pelatihan keterampilan komputer dan aplikasi perkantoran untuk mendukung kebutuhan belajar,
                            kerja, dan administrasi modern.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s">
                    <div class="single_tp">
                        <span class="tp_icon"><i class="fa-solid fa-pen-nib"></i></span>
                        <h3>Desain Grafis <br />& Editor Video</h3>
                        <p>Program pelatihan kreatif untuk mengembangkan kemampuan desain visual dan editing video sesuai
                            kebutuhan industri digital.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                    <div class="single_tp">
                        <span class="tp_icon"><i class="fa-solid fa-chart-line"></i></span>
                        <h3>Digital Marketing <br />& Website Basic</h3>
                        <p>Pelatihan pemasaran digital dan website dasar untuk membantu peserta memahami promosi online dan
                            pengembangan media digital.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.6s">
                    <div class="single_tp">
                        <span class="tp_icon"><i class="fa-solid fa-scissors"></i></span>
                        <h3>Menjahit <br />& Wirausaha</h3>
                        <p>Menghadirkan pelatihan menjahit dan inkubator wirausaha untuk membangun keterampilan praktis
                            serta kemandirian ekonomi peserta.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.7s">
                    <div class="single_tp">
                        <span class="tp_icon"><i class="fa-solid fa-hand-holding-heart"></i></span>
                        <h3>Wirausaha Disabilitas <br />& Production House</h3>
                        <p>Program pemberdayaan inklusif serta layanan produksi konten kreatif berupa video, desain, dan
                            media digital untuk berbagai kebutuhan.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- END LAYANAN APRILA -->

    <!-- START WHY CHOOSE US -->
    <section class="why_aprila section-padding"
        style="background:  url(assets/img/bg/shape-1.png) no-repeat center center / cover;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 col-sm-12 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">
                    <div class="why_aprila_intro">
                        <span class="why_tag">Why Choose Us</span>
                        <h2>Mengapa Harus Aprila?</h2>
                        <p>
                            Aprila hadir bukan hanya sebagai tempat belajar, tetapi sebagai mitra tumbuh yang membantu
                            peserta mengembangkan kemampuan, kepercayaan diri, dan kemandirian untuk masa depan yang lebih
                            baik.
                        </p>

                    </div>
                </div>

                <div class="col-lg-7 col-sm-12 col-xs-12">
                    <div class="why_aprila_list">
                        <div class="why_item wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                            <div class="why_number">01</div>
                            <div class="why_text">
                                <h3>Program Lengkap</h3>
                                <p>Dalam satu lembaga, Aprila menghadirkan pendidikan kesetaraan, kursus keterampilan,
                                    pelatihan kerja, hingga pemberdayaan wirausaha.</p>
                            </div>
                        </div>

                        <div class="why_item wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s">
                            <div class="why_number">02</div>
                            <div class="why_text">
                                <h3>Pembelajaran Praktis</h3>
                                <p>Setiap materi dirancang agar mudah dipahami dan dapat langsung diterapkan dalam dunia
                                    kerja, usaha, maupun kehidupan sehari-hari.</p>
                            </div>
                        </div>

                        <div class="why_item wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                            <div class="why_number">03</div>
                            <div class="why_text">
                                <h3>Inklusif dan Peduli</h3>
                                <p>Aprila berkomitmen menciptakan ruang belajar yang terbuka, ramah, dan mendukung semua
                                    kalangan, termasuk pemberdayaan bagi penyandang disabilitas.</p>
                            </div>
                        </div>

                        <div class="why_item wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.6s">
                            <div class="why_number">04</div>
                            <div class="why_text">
                                <h3>Berorientasi pada Kemandirian</h3>
                                <p>Aprila tidak hanya membekali peserta dengan ilmu, tetapi juga mendorong lahirnya
                                    keterampilan, kepercayaan diri, dan kemandirian yang berkelanjutan.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END WHY CHOOSE US -->

    <section class="awards section-padding"
        style="background-image: url('{{ asset('frontend/assets/img/bg/background3.png') }}'); background-size: cover; background-position: center center;">
        <div class="container">
            <div class="section-title text-center mb-5">
                <h2>Prestasi Aprila</h2>
                <p>Berikut adalah prestasi - prestasi yang pernah diraih Aprila.</p>
            </div>

            <div class="awards-carousel owl-carousel owl-theme">
                <div class="award-card">
                    <img src="{{ asset('frontend/assets/img/awards/1.png') }}" alt="Prestasi 1">
                    <h4>Juara 2 Pembelajaran Desain Busana Kerja Motiv Tradisional</h4>
                    <p class="award-desc">DINAS PENDIDIKAN PROVINSI KALIMANTAN BARAT</p>
                </div>

                <div class="award-card">
                    <img src="{{ asset('frontend/assets/img/awards/2.png') }}" alt="Prestasi 2">
                    <h4>Juara 3 Pengelola LKP</h4>
                    <p class="award-desc">APRESIASI GTK PAUD DAN DIKMAS PROVINSI KALIMANTAN BARAT TAHUN 2019</p>
                </div>

                <div class="award-card">
                    <img src="{{ asset('frontend/assets/img/awards/3.png') }}" alt="Prestasi 3">
                    <h4>Juara 3 Kategori Lembaga Kursus dan Pelatihan</h4>
                    <p class="award-desc">KEMENTERIAN PENDIDIKAN, KEBUDAYAAN, RISET, DAN TEKNOLOGI</p>
                </div>

                <div class="award-card">
                    <img src="{{ asset('frontend/assets/img/award3.png') }}" alt="Excellence Award">
                    <h4>Excellence Award</h4>
                    <p class="award-desc">Penghargaan atas kualitas layanan terbaik</p>
                </div>

                <div class="award-card">
                    <img src="{{ asset('frontend/assets/img/award3.png') }}" alt="Excellence Award">
                    <h4>Excellence Award</h4>
                    <p class="award-desc">Penghargaan atas kualitas layanan terbaik</p>
                </div>
            </div>
        </div>
    </section>

    <!-- START TESTIMONIALS -->
    <section class=" section-padding" style=" background-size: cover; background-position: center center;">
        <div class="container">
            <div class="section-title">
                <h2>Apa Kata Mereka <br />Tentang Aprila</h2>
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
    </section>
    <!-- END TESTIMONIALS -->

    <!-- START CLIENT & MITRA -->
    <div class="client-section section-padding">
        <div class="container">
            <div class="row part_bg">

                <!-- TITLE -->
                <div class="col-lg-4 col-sm-4 col-xs-12">
                    <div class="partner_title">
                        <h3>Klien & <span>Mitra Kami</span></h3>
                        <p>Instansi dan perusahaan yang telah bekerja sama dengan kami</p>
                    </div>
                </div>

                <!-- CAROUSEL -->
                <div class="col-lg-8 col-sm-8 col-xs-12 text-center">

                    <div class="client-carousel">

                        <div class="client-item">
                            <img src="{{ asset('frontend/assets/img/clients/1.png') }}" alt="">
                        </div>

                        <div class="client-item">
                            <img src="{{ asset('frontend/assets/img/clients/2.png') }}" alt="">
                        </div>

                        <div class="client-item">
                            <img src="{{ asset('frontend/assets/img/clients/3.png') }}" alt="">
                        </div>

                        <div class="client-item">
                            <img src="{{ asset('frontend/assets/img/clients/4.png') }}" alt="">
                        </div>

                        <div class="client-item">
                            <img src="{{ asset('frontend/assets/img/clients/5.png') }}" alt="">
                        </div>

                        <div class="client-item">
                            <img src="{{ asset('frontend/assets/img/clients/6.png') }}" alt="">
                        </div>

                    </div>

                </div>

            </div>
        </div>
    </div>
    <!-- END CLIENT & MITRA -->

    <!-- START COURSE -->
    <!-- START COURSE -->
    <section class="home_course section-padding"
        style="background-image: url('{{ asset('frontend/assets/img/bg/bg-course.png') }}'); background-size: cover; background-position: center center;">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-sm-6 col-xs-12">
                    <div class="section-title">
                        <h2>Ayo Bergabung dengan <b>80,000+ </b> <br />Kursus dan Pelatihan.</h2>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-xs-12">
                    <div class="cour_btn text-end">
                        <a href="course.html" class="btn_one">View all Courses <i class="ti-arrow-top-right"></i></a>
                    </div>
                </div>
            </div>

            <!-- Course Carousel -->
            <div class="course-carousel owl-carousel owl-theme">
                <div class="single_course">
                    <div class="single_c_img">
                        <img src="{{ asset('frontend/assets/img/course/1.png') }}" class="img-fluid" alt="Canva Pro" />
                    </div>
                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                        class="fa fa-star"></i><i class="fa fa-star"></i>
                    <h4><a href="course.html">Canva Pro</a></h4>
                    <p><span class="ti-book"></span> 12 Course</p>
                    <p><span class="ti-alarm-clock"></span> 2 Hrs 32 Min</p>
                    <div class="price">Rp. 250.000</div>
                </div>

                <div class="single_course">
                    <div class="single_c_img">
                        <img src="{{ asset('frontend/assets/img/course/2.png') }}" class="img-fluid"
                            alt="Kursus Komputer" />
                    </div>
                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                        class="fa fa-star"></i><i class="fa fa-star"></i>
                    <h4><a href="course.html">Kursus Komputer</a></h4>
                    <p><span class="ti-book"></span> 12 Course</p>
                    <p><span class="ti-alarm-clock"></span> 2 Hrs 32 Min</p>
                    <div class="price">Rp. 250.000</div>
                </div>

                <div class="single_course">
                    <div class="single_c_img">
                        <img src="{{ asset('frontend/assets/img/course/3.png') }}" class="img-fluid"
                            alt="Kursus Komputer" />
                    </div>
                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                        class="fa fa-star"></i><i class="fa fa-star"></i>
                    <h4><a href="course.html">Kursus Komputer</a></h4>
                    <p><span class="ti-book"></span> 12 Course</p>
                    <p><span class="ti-alarm-clock"></span> 2 Hrs 32 Min</p>
                    <div class="price">Rp. 250.000</div>
                </div>

                <!-- Duplicate untuk smooth looping -->
                <div class="single_course">
                    <div class="single_c_img">
                        <img src="{{ asset('frontend/assets/img/course/1.png') }}" class="img-fluid" alt="Canva Pro" />
                    </div>
                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                        class="fa fa-star"></i><i class="fa fa-star"></i>
                    <h4><a href="course.html">Canva Pro</a></h4>
                    <p><span class="ti-book"></span> 12 Course</p>
                    <p><span class="ti-alarm-clock"></span> 2 Hrs 32 Min</p>
                    <div class="price">Rp. 250.000</div>
                </div>
                <div class="single_course">
                    <div class="single_c_img">
                        <img src="{{ asset('frontend/assets/img/course/1.png') }}" class="img-fluid" alt="Canva Pro" />
                    </div>
                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                        class="fa fa-star"></i><i class="fa fa-star"></i>
                    <h4><a href="course.html">Canva Pro</a></h4>
                    <p><span class="ti-book"></span> 12 Course</p>
                    <p><span class="ti-alarm-clock"></span> 2 Hrs 32 Min</p>
                    <div class="price">Rp. 250.000</div>
                </div>
                <div class="single_course">
                    <div class="single_c_img">
                        <img src="{{ asset('frontend/assets/img/course/1.png') }}" class="img-fluid" alt="Canva Pro" />
                    </div>
                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                        class="fa fa-star"></i><i class="fa fa-star"></i>
                    <h4><a href="course.html">Canva Pro</a></h4>
                    <p><span class="ti-book"></span> 12 Course</p>
                    <p><span class="ti-alarm-clock"></span> 2 Hrs 32 Min</p>
                    <div class="price">Rp. 250.000</div>
                </div>

            </div>
        </div>
    </section>
    <!-- END COURSE -->
    <!-- END COURSE -->

    <!-- START TEAM -->
    <section class="team_area section-padding">
        <div class="container">
            <div class="section-title text-center">
                <h2>Tim Aprila</h2>
            </div>
            <div class="row">
                <div class="col-lg-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s"
                    data-wow-offset="0">
                    <div class="our-team">
                        <div class="team-content">
                            <a href="#"><img src="{{ asset('frontend/assets/img/team/team1.jpg') }}"
                                    alt=""></a>
                            <ul class="social-links">
                                <li><a href="#"><i class="fa-solid fa-x"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                        <div class="team-prof">
                            <h3>Ratu Bilkis</h3>
                            <span>Web designer</span>
                        </div>
                        <div class="sth_det2">
                            <span class="ti-file"> <u>04 Course</u></span>
                            <span class="ti-user"> <u>27 Student</u></span>
                        </div>
                    </div>
                </div><!--- END COL -->
                <div class="col-lg-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s"
                    data-wow-offset="0">
                    <div class="our-team">
                        <div class="team-content">
                            <a href="#"><img src="{{ asset('frontend/assets/img/team/team2.jpg') }}"
                                    alt=""></a>
                            <ul class="social-links">
                                <li><a href="#"><i class="fa-solid fa-x"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                        <div class="team-prof">
                            <h3>Ha Mood</h3>
                            <span>Instruktur</span>
                        </div>
                        <div class="sth_det2">
                            <span class="ti-file"> <u>06 Course</u></span>
                            <span class="ti-user"> <u>41 Student</u></span>
                        </div>
                    </div>
                </div><!--- END COL -->
                <div class="col-lg-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s"
                    data-wow-offset="0">
                    <div class="our-team">
                        <div class="team-content">
                            <a href="#"><img src="{{ asset('frontend/assets/img/team/team3.jpg') }}"
                                    alt=""></a>
                            <ul class="social-links">
                                <li><a href="#"><i class="fa-solid fa-x"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                        <div class="team-prof">
                            <h3>Shyinn Splendid</h3>
                            <span>Codecanyou</span>
                        </div>
                        <div class="sth_det2">
                            <span class="ti-file"> <u>13 Course</u></span>
                            <span class="ti-user"> <u>31 Student</u></span>
                        </div>
                    </div>
                </div><!--- END COL -->
                <div class="col-lg-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s"
                    data-wow-offset="0">
                    <div class="our-team">
                        <div class="team-content">
                            <a href="#"><img src="{{ asset('frontend/assets/img/team/team4.jpg') }}"
                                    alt=""></a>
                            <ul class="social-links">
                                <li><a href="#"><i class="fa-solid fa-x"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                        <div class="team-prof">
                            <h3>Shorif shorifa</h3>
                            <span>Tsc chottor</span>
                        </div>
                        <div class="sth_det2">
                            <span class="ti-file"> <u>07 Course</u></span>
                            <span class="ti-user"> <u>24 Student</u></span>
                        </div>
                    </div>
                </div><!--- END COL -->
            </div><!--- END ROW -->
        </div><!--- END CONTAINER -->
    </section>
    <!-- END TEAM -->

    <!-- START BLOG -->
    <section id="blog" class="blog_area section-padding"
        style="background-image: url('{{ asset('frontend/assets/img/bg/background4.png') }}'); background-size: cover; background-position: center center;">
        <div class="container">
            <div class="section-title text-center">
                <h2>Berita Terbaru</h2>
                <p>We offer a brand new approach to the most basic learning paradigms. Choose from a wide range of
                    learning options and gain new skills! Our school is know.</p>
            </div>

            <div class="row">
                <!-- Blog 1 -->
                    <div class="col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s">
                        <div class="single_blog">
                            <img src="{{ asset('frontend/assets/img/blog/1.jpg') }}" class="img-fluid" alt="image" />
                            <div class="content_box">
                                <span>May 10, 2024 | <a href="blog.html">Education</a></span>
                                <h2><a href="blog.html">Professional Mobile Painting and Sculpting</a></h2>
                                <a class="btn_one" href="{{ route('detail-berita') }}">Read More <i class="ti-arrow-top-right"></i></a>
                            </div>
                        </div>
                    </div>

                <!-- Blog 2 -->
                <div class="col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s">
                    <div class="single_blog">
                        <img src="{{ asset('frontend/assets/img/blog/2.jpg') }}" class="img-fluid" alt="image" />
                        <div class="content_box">
                            <span>May 16, 2024 | <a href="blog.html">Education</a></span>
                            <h2><a href="blog.html">Professional Ceramic Moulding for Beginner</a></h2>
                            <a class="btn_one" href="blog.html">Read More <i class="ti-arrow-top-right"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Blog 3 -->
                <div class="col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                    <div class="single_blog">
                        <img src="{{ asset('frontend/assets/img/blog/3.jpg') }}" class="img-fluid" alt="image" />
                        <div class="content_box">
                            <span>May 18, 2024 | <a href="blog.html">Programing</a></span>
                            <h2><a href="blog.html">Education Is About Create Leaders For Tomorrow</a></h2>
                            <a class="btn_one" href="blog.html">Read More <i class="ti-arrow-top-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Tombol Lihat Semua Berita -->
            <div class="row mt-5">
                <div class="col-12 text-center">
                    <a href="blog.html" class="btn_one btn-lg">
                        Lihat Semua Berita
                        <i class="ti-arrow-top-right"></i>
                    </a>
                </div>
            </div>

        </div>
    </section>

    <!-- END BLOG -->
    <div class="container-fluid wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h1 class="mb-0">Terhubung dengan sosial media kami.</h1>
            </div>
            <div class="row g-5 justify-content-center">
                <!-- Instagram Card -->
                <div class="col-lg-2 col-md-4 col-6">
                    <a href="https://www.instagram.com/aprilaindonesia/" target="_blank"
                        class="card-sosmed shadow text-center instagram-card">
                        <i class="fab fa-instagram fa-3x"></i>
                        <p>Instagram</p>
                    </a>
                </div>

                <!-- Tiktok Card -->
                <div class="col-lg-2 col-md-4 col-6">
                    <a href="https://www.tiktok.com/@aprilaindonesia" target="_blank"
                        class="card-sosmed shadow text-center tiktok-card">
                        <i class="fab fa-tiktok fa-3x"></i>
                        <p>Tiktok</p>
                    </a>
                </div>

                <!-- Whatsapp Card -->
                <div class="col-lg-2 col-md-4 col-6">
                    <a href="https://www.youtube.com/channel/UCfffSGjpP6YCAjTpiI1iwOA" target="_blank"
                        class="card-sosmed shadow text-center youtube-card">
                        <i class="fab fa-youtube fa-3x"></i>
                        <p>Youtube</p>
                    </a>
                </div>
                <!-- Facebook Card -->
                <div class="col-lg-2 col-md-4 col-6">
                    <a href="https://www.facebook.com/people/Aprila-Edu/100014731871098/" target="_blank"
                        class="card-sosmed shadow text-center facebook-card">
                        <i class="fab fa-facebook fa-3x"></i>
                        <p>Facebook</p>
                    </a>
                </div>
            </div>
            <div class="mt-5">
                <div class="row">
                    <!-- Instagram Section -->
                    <div class="col-lg-6">
                        <h5 class="mb-3">Postingan Instagram Terbaru</h5>
                        <blockquote class="instagram-media"
                            data-instgrm-permalink="https://www.instagram.com/aprilaindonesia/?utm_source=ig_embed&utm_campaign=loading"
                            data-instgrm-version="14"
                            style="background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:658px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);">
                            <div style="padding:16px;">
                                <a href="https://www.instagram.com/aprilaindonesia/?utm_source=ig_embed&utm_campaign=loading"
                                    style="background:#FFFFFF; line-height:0; padding:0 0; text-align:center; text-decoration:none; width:100%;"
                                    target="_blank">
                                    <div style="display: flex; flex-direction: row; align-items: center;">
                                        <div
                                            style="background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 40px; margin-right: 14px; width: 40px;">
                                        </div>
                                        <div
                                            style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center;">
                                            <div
                                                style="background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 100px;">
                                            </div>
                                            <div
                                                style="background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 60px;">
                                            </div>
                                        </div>
                                    </div>
                                    <div style="padding: 19% 0;"></div>
                                    <div style="display:block; margin:0 auto 12px; width:50px;">
                                        <svg width="50px" height="50px" viewBox="0 0 60 60"
                                            xmlns="https://www.w3.org/2000/svg"
                                            xmlns:xlink="https://www.w3.org/1999/xlink">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <g transform="translate(-511.000000, -20.000000)" fill="#000000">
                                                    <g>
                                                        <path
                                                            d="M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167 560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,41.851 570.966,40.831 570.82,37.631">
                                                        </path>
                                                    </g>
                                                </g>
                                            </g>
                                        </svg>
                                    </div>
                                    <div style="padding-top: 8px;">
                                        <div
                                            style="color:#3897f0; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:550; line-height:18px;">
                                            View this profile on Instagram
                                        </div>
                                    </div>
                                    <div style="padding: 12.5% 0;"></div>
                                    <div
                                        style="display: flex; flex-direction: row; margin-bottom: 14px; align-items: center;">
                                        <div>
                                            <div
                                                style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(0px) translateY(7px);">
                                            </div>
                                            <div
                                                style="background-color: #F4F4F4; height: 12.5px; transform: rotate(-45deg) translateX(3px) translateY(1px); width: 12.5px; flex-grow: 0; margin-right: 14px; margin-left: 2px;">
                                            </div>
                                            <div
                                                style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(9px) translateY(-18px);">
                                            </div>
                                        </div>
                                        <div style="margin-left: 8px;">
                                            <div
                                                style="background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 20px; width: 20px;">
                                            </div>
                                            <div
                                                style="width: 0; height: 0; border-top: 2px solid transparent; border-left: 6px solid #f4f4f4; border-bottom: 2px solid transparent; transform: translateX(16px) translateY(-4px) rotate(30deg)">
                                            </div>
                                        </div>
                                        <div style="margin-left: auto;">
                                            <div
                                                style="width: 0px; border-top: 8px solid #F4F4F4; border-right: 8px solid transparent; transform: translateY(16px);">
                                            </div>
                                            <div
                                                style="background-color: #F4F4F4; flex-grow: 0; height: 12px; width: 16px; transform: translateY(-4px);">
                                            </div>
                                            <div
                                                style="width: 0; height: 0; border-top: 8px solid #F4F4F4; border-left: 8px solid transparent; transform: translateY(-4px) translateX(8px);">
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center; margin-bottom: 24px;">
                                        <div
                                            style="background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 224px;">
                                        </div>
                                        <div
                                            style="background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 144px;">
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </blockquote>
                        <script async src="//platform.instagram.com/en_US/embeds.js"></script>
                    </div>
                    <!-- TikTok Section -->
                    <div class="col-lg-6">
                        <h5>Postingan Tiktok Terbaru</h5>
                        <blockquote class="tiktok-embed" cite="https://www.tiktok.com/@aprilaindonesia"
                            data-unique-id="aprilaindonesia" data-embed-type="creator"
                            style="max-width: 780px; min-width: 288px;">
                            <section>
                                <a target="_blank"
                                    href="https://www.tiktok.com/@aprilaindonesia?refer=creator_embed">@aprilaindonesia</a>
                            </section>
                        </blockquote>
                        <script async src="https://www.tiktok.com/embed.js"></script>
                    </div>


                </div>
            </div>

        </div>
    </div>
@endsection
