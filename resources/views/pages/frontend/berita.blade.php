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
    <section id="blog" class="blog_area section-padding">
        <div class="container">
            <div class="section-title text-center">
                <h2>Berita Terbaru</h2>
            </div>

            <div class="row">

                @forelse($berita as $item)
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-4 wow fadeInUp">

                        <div class="single_blog">

                            @if ($item->thumbnail)
                                <img src="{{ asset('storage/' . $item->thumbnail) }}" class="img-fluid"
                                    style="height:250px;width:100%;object-fit:cover;" alt="{{ $item->judul }}">
                            @else
                                <img src="{{ asset('frontend/assets/img/blog/default.jpg') }}" class="img-fluid"
                                    style="height:250px;width:100%;object-fit:cover;" alt="{{ $item->judul }}">
                            @endif

                            <div class="content_box">

                                <span>
                                    {{ $item->published_at?->format('d M Y') }}
                                    |
                                    <a href="#">
                                        {{ $item->kategori->nama }}
                                    </a>
                                </span>

                                <h2>
                                    <a href="{{ route('detail-berita', $item->slug) }}">
                                        {{ Str::limit($item->judul, 55) }}
                                    </a>
                                </h2>

                                <a class="btn_one" href="{{ route('detail-berita', $item->slug) }}">
                                    Read More
                                    <i class="ti-arrow-top-right"></i>
                                </a>

                            </div>

                        </div>

                    </div>

                @empty

                    <div class="col-12">

                        <div class="alert alert-info text-center">
                            Belum ada berita yang dipublikasikan.
                        </div>

                    </div>
                @endforelse

            </div>

            <div class="mt-5 d-flex justify-content-center">
                {{ $berita->links() }}
            </div>

        </div>
    </section>
@endsection
