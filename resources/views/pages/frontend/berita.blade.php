@extends('layouts.frontend')
@section('title')
    Berita
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
                    <h1>Berita Aprila</h1>
                    <ul>
                        <li><a href="{{ route('welcome') }}">Beranda</a></li>
                        <li> / Berita</li>
                    </ul>
                </div><!-- //.HERO-TEXT -->
            </div><!--- END COL -->
        </div><!--- END CONTAINER -->
    </section>
    <section id="blog" class="blog_area section-padding"
       >
        <div class="container">
            <div class="section-title text-center">
                <h2>Berita Terbaru</h2>
            </div>

            <div class="row">
                <!-- Blog 1 -->
                <div class="col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s">
                    <div class="single_blog">
                        <img src="{{ asset('frontend/assets/img/blog/1.jpg') }}" class="img-fluid" alt="image" />
                        <div class="content_box">
                            <span>May 10, 2024 | <a href="blog.html">Education</a></span>
                            <h2><a href="blog.html">Professional Mobile Painting and Sculpting</a></h2>
                            <a class="btn_one" href="blog.html">Read More <i class="ti-arrow-top-right"></i></a>
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


        </div>
    </section>
@endsection
