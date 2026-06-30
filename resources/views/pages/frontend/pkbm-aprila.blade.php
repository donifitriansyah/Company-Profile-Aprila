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

    <!-- START COURSE -->
    <section class="home_course section-padding"
        style="background-image: url('{{ asset('frontend/assets/img/bg/sect-lyn.png') }}'); background-size: cover; background-position: center center;">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-sm-6 col-xs-12">
                    <div class="section-title">
                        <h2>Paket yang tersedia di <br><b>PKBM Aprila</b>.</h2>
                    </div>
                </div><!--- END COL -->
                <div class="col-lg-4 col-sm-6 col-xs-12">
                    <div class="cour_btn">
                        <a href="course.html" class="btn_one">Daftar Sekarang <i class="ti-arrow-top-right"></i></a>
                    </div>
                </div><!--- END COL -->
            </div><!--- END ROW -->
            <div class="row">
                <div class="col-lg-4 col-sm-6 col-xs-12">
                    <div class="single_course">
                        <div class="single_c_img">
                            <img src="{{ asset('frontend/assets/img/course/1.png') }}" class="img-fluid"
                                alt="course-image" />
                        </div>
                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                            class="fa fa-star"></i><i class="fa fa-star"></i>
                        <h4><a href="{{ route('detail-kursus') }}">Paket A</a></h4>
                        <p><span class="ti-alarm-clock"> </span>Online & Offline</p>
                        <div class="price">Jenjang SD & Sederajat</div>
                    </div>
                </div><!-- END COL -->
                <div class="col-lg-4 col-sm-6 col-xs-12">
                    <div class="single_course">
                        <div class="single_c_img">
                            <img src="{{ asset('frontend/assets/img/course/2.png') }}" class="img-fluid"
                                alt="course-image" />
                        </div>
                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                            class="fa fa-star"></i><i class="fa fa-star"></i>
                        <h4><a href="course.html">Paket B</a></h4>
                        <p><span class="ti-alarm-clock"> </span>Online & Offline</p>
                        <div class="price">Jenjang SMP & Sederajat</div>
                    </div>
                </div><!-- END COL -->
                <div class="col-lg-4 col-sm-6 col-xs-12">
                    <div class="single_course">
                        <div class="single_c_img">
                            <img src="{{ asset('frontend/assets/img/course/3.png') }}" class="img-fluid"
                                alt="course-image" />
                        </div>
                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                            class="fa fa-star"></i><i class="fa fa-star"></i>
                        <h4><a href="course.html">Paket C</a></h4>
                        <p><span class="ti-alarm-clock"> </span>Online & Offline</p>
                        <div class="price">Jenjang SMA & Sederajat</div>
                    </div>
                </div><!-- END COL -->

            </div><!--- END ROW -->
        </div><!--- END CONTAINER -->
    </section>
    <!-- END COURSE -->

    <!-- START TEAM -->
    <section class="team_area section-padding">
        <div class="container">
            <div class="section-title text-center">
                <h2>Tenaga Pendidik <b>PKBM Aprila</b></h2>
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

    <!-- START TESTIMONIALS -->
    <section class=" section-padding" style="background-image: url('{{ asset('frontend/assets/img/bg/background3.png') }}'); background-size: cover; background-position: center center;">
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
    </section>
    <!-- END TESTIMONIALS -->
@endsection
