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
                    <h1>Kelas Kursus dan Jasa Aprila</h1>
                    <ul>
                        <li><a href="{{ route('welcome') }}">Beranda</a></li>
                        <li> / Kelas Kursus dan Jasa</li>
                    </ul>
                </div><!-- //.HERO-TEXT -->
            </div><!--- END COL -->
        </div><!--- END CONTAINER -->
    </section>
    <!-- END SECTION TOP -->


    <!-- START COURSE -->
    <section class=" section-padding"
        >
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-sm-6 col-xs-12">
                    <div class="section-title">
                        <h2>Kelas Kursus yang tersedia <br><b>di Aprila</b>.</h2>
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
                        <h4><a href="course.html">Paket A</a></h4>
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
    <!-- START COURSE -->
    <section class=" section-padding" style="background-image: url('{{ asset('frontend/assets/img/bg/background4.png') }}'); background-size: cover; background-position: center center;"
        >
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-sm-6 col-xs-12">
                    <div class="section-title">
                        <h2>Jasa yang tersedia <br><b>di Aprila</b>.</h2>
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
                        <h4><a href="course.html">Paket A</a></h4>
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

@endsection
