@extends('layouts.frontend')

@section('title', $berita->judul)

@section('og_title', $berita->judul)

@section('meta_description', $berita->meta_description ?? Str::limit(strip_tags($berita->ringkasan ?: $berita->isi),
    160))

@section('meta_keywords', $berita->kategori->nama . ', Aprila Indonesia, Pelatihan, Pendidikan')

@section('og_description', $berita->meta_description ?? Str::limit(strip_tags($berita->ringkasan ?: $berita->isi), 160))

@section('og_image', $berita->thumbnail ? secure_asset('storage/' . $berita->thumbnail) :
    secure_asset('frontend/assets/img/default-news.jpg'))

@section('title', $berita->judul)

@section('content')

    <section class="section-top"
        style="background-image:url('{{ asset('frontend/assets/img/bg-2.png') }}');
    background-size:cover;
    background-position:center;">

        <div class="container">

            <div class="col-lg-10 offset-lg-1 text-center">

                <div class="section-top-title">

                    <h1>{{ $berita->judul }}</h1>

                    <ul>
                        <li>
                            <a href="{{ route('welcome') }}">
                                Beranda
                            </a>
                        </li>

                        <li>/</li>

                        <li>
                            <a href="{{ route('berita') }}">
                                Berita
                            </a>
                        </li>

                        <li>/ {{ $berita->judul }}</li>

                    </ul>

                </div>

            </div>

        </div>

    </section>

    <section class="blog-page section-padding">

        <div class="container">

            <div class="row justify-content-center">

                <div class="col-lg-8">

                    <div class="news-detail-card">

                        {{-- Thumbnail --}}
                        @if ($berita->thumbnail)
                            <div class="arti_img_two mb-4">

                                <img src="{{ asset('storage/' . $berita->thumbnail) }}"
                                    class="img-fluid rounded shadow w-100" style="height:500px; object-fit:cover;">

                            </div>
                        @endif


                        {{-- Meta --}}
                        <div class="mb-4">

                            <span class="badge bg-primary">

                                {{ $berita->kategori->nama }}

                            </span>

                            <span class="ms-3">

                                <i class="fa fa-calendar"></i>

                                {{ $berita->published_at?->format('d F Y') }}

                            </span>

                            <span class="ms-3">

                                <i class="fa fa-user"></i>

                                {{ $berita->user->name }}

                            </span>

                            <span class="ms-3">

                                <i class="fa fa-eye"></i>

                                {{ number_format($berita->views) }}

                            </span>

                        </div>

                        <style>
                            .article-title {

                                font-size: 42px;

                                font-weight: 800;

                                line-height: 1.3;

                                margin-bottom: 25px;

                            }

                            .article-summary {

                                font-size: 20px;

                                font-style: italic;

                                color: #555;

                                border-left: 5px solid #0d6efd;

                                padding-left: 20px;

                                margin-bottom: 35px;

                            }

                            .content-berita {

                                font-size: 18px;

                                line-height: 2;

                                color: #333;

                            }

                            .content-berita img {

                                max-width: 100%;

                                border-radius: 12px;

                                margin: 25px 0;

                            }

                            .content-berita h2 {

                                margin-top: 35px;

                            }

                            .content-berita p {

                                margin-bottom: 20px;

                            }

                            .gallery-item {

                                position: relative;

                                overflow: hidden;

                                border-radius: 15px;

                            }

                            .gallery-item img {

                                width: 100%;

                                height: 250px;

                                object-fit: cover;

                                transition: .4s;

                            }

                            .gallery-item:hover img {

                                transform: scale(1.1);

                            }

                            .overlay {

                                position: absolute;

                                bottom: 0;

                                width: 100%;

                                background: rgba(0, 0, 0, .6);

                                color: white;

                                padding: 15px;

                            }
                        </style>

                        {{-- Judul --}}
                        <h2 class="article-title">

                            {{ $berita->judul }}

                        </h2>

                        {{-- Ringkasan --}}
                        @if ($berita->ringkasan)
                            <div class="article-summary">

                                {{ $berita->ringkasan }}

                            </div>
                        @endif

                        {{-- Isi --}}
                        <div class="content-berita">

                            {!! $berita->isi !!}

                        </div>

                    </div>


                    {{-- GALERI --}}
                    @if ($berita->galeri->count())

                        <div class="gallery-item">

                            <h3 class="mb-4">

                                Galeri Foto

                            </h3>

                            <div class="row">

                                @foreach ($berita->galeri as $gambar)
                                    <div class="col-lg-4 col-md-6 mb-4">

                                        <div class="card shadow-sm border-0">

                                            <img src="{{ asset('storage/' . $gambar->gambar) }}" class="card-img-top"
                                                style="height:250px;object-fit:cover;">

                                            @if ($gambar->caption)
                                                <div class="card-body">

                                                    <p class="text-center mb-0">

                                                        {{ $gambar->caption }}

                                                    </p>

                                                </div>
                                            @endif

                                        </div>

                                    </div>
                                @endforeach

                            </div>

                        </div>

                    @endif

                    <div class="comment-section mt-5">

                        <h3 class="comment-title">
                            Komentar ({{ $berita->komentar->where('is_approved', true)->count() }})
                        </h3>

                        @forelse($berita->komentar->where('is_approved', true) as $item)
                            <div class="comment-item">

                                <div class="comment-avatar">

                                    {{ strtoupper(substr($item->nama, 0, 1)) }}

                                </div>

                                <div class="comment-content">

                                    <div class="comment-header">

                                        <h5>{{ $item->nama }}</h5>

                                        <span>

                                            <i class="fa fa-calendar"></i>

                                            {{ $item->created_at->format('d M Y H:i') }}

                                        </span>

                                    </div>

                                    <p>

                                        {{ $item->komentar }}

                                    </p>

                                </div>

                            </div>

                        @empty

                            <div class="alert alert-light text-center">

                                Belum ada komentar.

                            </div>
                        @endforelse

                    </div>

                    @if ($errors->any())

                        <div class="alert alert-danger">

                            <ul class="mb-0">

                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach

                            </ul>

                        </div>

                    @endif

                    <form action="{{ route('komentar-berita.store', $berita->slug) }}" method="POST">

                        @csrf

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul class="mb-0">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <div class="row">

                            <div class="form-group col-md-6 mb-3">
                                <input type="text" name="nama" class="form-control" placeholder="Nama"
                                    autocomplete="name" value="{{ old('nama') }}" required>
                            </div>

                            <div class="form-group col-md-6 mb-3">
                                <input type="email" name="email" class="form-control" placeholder="Email"
                                    autocomplete="email" value="{{ old('email') }}">
                            </div>

                            <div class="form-group col-md-12 mb-3">
                                <textarea name="komentar" rows="6" class="form-control" placeholder="Tulis komentar..." required>{{ old('komentar') }}</textarea>
                            </div>

                            <div class="col-md-12 mb-3">

                                {!! NoCaptcha::display() !!}

                                @error('g-recaptcha-response')
                                    <small class="text-danger">
                                        {{ $message }}
                                    </small>
                                @enderror

                            </div>

                            <div class="col-md-12">

                                <button type="submit" class="btn btn_one">
                                    Kirim Komentar
                                </button>

                            </div>

                        </div>

                    </form>



                    <style>
                        .comment-section {

                            margin-top: 60px;

                        }

                        .comment-title {

                            font-size: 28px;

                            font-weight: 700;

                            margin-bottom: 30px;

                        }

                        .comment-item {

                            display: flex;

                            gap: 20px;

                            margin-bottom: 25px;

                            background: #fff;

                            border-radius: 12px;

                            padding: 20px;

                            box-shadow: 0 5px 20px rgba(0, 0, 0, .06);

                        }

                        .comment-avatar {

                            width: 60px;

                            height: 60px;

                            border-radius: 50%;

                            background: #0d6efd;

                            color: #fff;

                            display: flex;

                            align-items: center;

                            justify-content: center;

                            font-size: 24px;

                            font-weight: bold;

                            flex-shrink: 0;

                        }

                        .comment-content {

                            flex: 1;

                        }

                        .comment-header {

                            display: flex;

                            justify-content: space-between;

                            align-items: center;

                            margin-bottom: 10px;

                        }

                        .comment-header h5 {

                            margin: 0;

                            font-weight: 700;

                        }

                        .comment-header span {

                            font-size: 13px;

                            color: #888;

                        }

                        .comment-content p {

                            margin: 0;

                            color: #555;

                            line-height: 1.8;

                        }
                    </style>





                    {{-- BERITA LAINNYA --}}
                    @if ($beritaTerbaru->count())

                        <div class="related-news mt-5">

                            <div class="section-heading d-flex justify-content-between align-items-center mb-4">

                                <h3 class="fw-bold mb-0">
                                    <i class="fa fa-newspaper text-primary me-2"></i>
                                    Berita Lainnya
                                </h3>

                                <a href="{{ route('berita') }}" class="btn btn-sm btn-outline-primary">
                                    Lihat Semua
                                </a>

                            </div>

                            <div class="row">

                                @foreach ($beritaTerbaru as $item)
                                    @if ($item->id != $berita->id)
                                        <div class="col-lg-4 col-md-6 mb-4 d-flex">

                                            <div class="related-card w-100">

                                                <a href="{{ route('detail-berita', $item->slug) }}"
                                                    class="related-image-wrapper">

                                                    <img src="{{ $item->thumbnail ? asset('storage/' . $item->thumbnail) : asset('frontend/assets/img/blog/default.jpg') }}"
                                                        alt="{{ $item->judul }}" class="related-image">

                                                </a>

                                                <div class="related-content">

                                                    <div class="related-meta">

                                                        <span class="related-category">

                                                            {{ Str::limit($item->kategori->nama, 18) }}

                                                        </span>

                                                        <span class="related-date">

                                                            <i class="fa fa-calendar"></i>

                                                            {{ $item->published_at?->format('d M Y') }}

                                                        </span>

                                                    </div>
                                                    <style>
                                                        .related-meta {

                                                            display: flex;

                                                            justify-content: space-between;

                                                            align-items: center;

                                                            gap: 10px;

                                                            margin-bottom: 15px;

                                                        }

                                                        .related-category {

                                                            background: #0d6efd;

                                                            color: #fff;

                                                            padding: 5px 12px;

                                                            border-radius: 30px;

                                                            font-size: 12px;

                                                            font-weight: 600;

                                                            max-width: 65%;

                                                            overflow: hidden;

                                                            white-space: nowrap;

                                                            text-overflow: ellipsis;

                                                        }

                                                        .related-date {

                                                            font-size: 13px;

                                                            color: #777;

                                                            white-space: nowrap;

                                                        }
                                                    </style>

                                                    <h5 class="related-title">

                                                        <a href="{{ route('detail-berita', $item->slug) }}">
                                                            {{ $item->judul }}
                                                        </a>

                                                    </h5>

                                                    <p class="related-summary">

                                                        {{ Str::limit(strip_tags($item->ringkasan ?? $item->isi), 120) }}

                                                    </p>

                                                    <a href="{{ route('detail-berita', $item->slug) }}"
                                                        class="read-more mt-auto">

                                                        Baca Selengkapnya
                                                        <i class="fa fa-arrow-right ms-1"></i>

                                                    </a>

                                                </div>

                                            </div>

                                        </div>
                                    @endif
                                @endforeach

                            </div>

                        </div>

                    @endif

                </div>

                <div class="col-lg-4">

                    <div class="sidebar">

                        {{-- Berita Populer --}}
                        <div class="sidebar-widget">

                            <h4 class="sidebar-title">
                                🔥 Berita Populer
                            </h4>

                            @foreach ($beritaPopuler as $item)
                                <a href="{{ route('detail-berita', $item->slug) }}" class="sidebar-news">

                                    <div class="sidebar-thumb">

                                        <img
                                            src="{{ $item->thumbnail ? asset('storage/' . $item->thumbnail) : asset('frontend/assets/img/blog/default.jpg') }}">

                                    </div>

                                    <div class="sidebar-body">

                                        <h6>

                                            {{ Str::limit($item->judul, 60) }}

                                        </h6>

                                        <small>

                                            <i class="fa fa-calendar"></i>

                                            {{ $item->published_at?->format('d M Y') }}

                                        </small>

                                        <small>

                                            <i class="fa fa-eye"></i>

                                            {{ number_format($item->views) }}

                                        </small>

                                    </div>

                                </a>
                            @endforeach

                        </div>



                        {{-- Berita Terbaru --}}
                        <div class="sidebar-widget mt-4">

                            <h4 class="sidebar-title">

                                📰 Berita Terbaru

                            </h4>

                            @foreach ($beritaTerbaru as $item)
                                <div class="sidebar-post">

                                    <a href="{{ route('detail-berita', $item->slug) }}" class="post-image">

                                        <img src="{{ $item->thumbnail ? asset('storage/' . $item->thumbnail) : asset('frontend/assets/img/blog/default.jpg') }}"
                                            alt="{{ $item->judul }}">

                                    </a>

                                    <div class="post-content">

                                        <a href="{{ route('detail-berita', $item->slug) }}" class="post-title">

                                            {{ Str::limit($item->judul, 60) }}

                                        </a>

                                        <span>

                                            <i class="ti-calendar"></i>

                                            {{ $item->published_at?->format('d M Y') }}

                                        </span>

                                    </div>

                                </div>
                            @endforeach

                        </div>



                        {{-- Kategori --}}
                        @if ($kategori->count())

                            <div class="sidebar-widget mt-4">

                                <h4 class="sidebar-title">

                                    📂 Kategori

                                </h4>

                                @foreach ($kategori as $item)
                                    <a href="{{ route('berita', ['kategori' => $item->slug]) }}" class="category-item">

                                        <span>

                                            {{ $item->nama }}

                                        </span>

                                        <span class="badge">

                                            {{ $item->total_berita }}

                                        </span>

                                    </a>
                                @endforeach

                            </div>

                        @endif

                    </div>

                </div>

            </div>

    </section>
    <style>
        .sidebar-news {

            display: flex;

            gap: 15px;

            align-items: flex-start;

            text-decoration: none;

            color: #222;

            margin-bottom: 20px;

            padding-bottom: 20px;

            border-bottom: 1px solid #ececec;

        }

        .sidebar-news:last-child {

            border-bottom: none;

            margin-bottom: 0;

            padding-bottom: 0;

        }

        .sidebar-thumb {

            flex: 0 0 110px;

        }

        .sidebar-thumb img {

            width: 110px;

            height: 90px;

            object-fit: cover;

            border-radius: 10px;

            display: block;

            transition: .3s;

        }

        .sidebar-news:hover img {

            transform: scale(1.05);

        }

        .sidebar-body {

            flex: 1;

            min-width: 0;

        }

        .sidebar-body h6 {

            font-size: 15px;

            font-weight: 700;

            line-height: 1.5;

            margin-bottom: 8px;

            color: #222;

            display: -webkit-box;

            -webkit-line-clamp: 3;

            -webkit-box-orient: vertical;

            overflow: hidden;

        }

        .sidebar-news:hover h6 {

            color: #0d6efd;

        }

        .sidebar-body small {

            display: block;

            color: #888;

            margin-bottom: 4px;

            font-size: 13px;

        }

        .related-card {
            background: #fff;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 8px 24px rgba(0, 0, 0, .08);
            transition: all .3s ease;

            /* KUNCI KONSISTENSI */
            display: flex;
            flex-direction: column;
            height: 100%;
        }

        .related-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 16px 40px rgba(0, 0, 0, .14);
        }

        .related-image-wrapper {
            overflow: hidden;
            display: block;
        }

        /* Semua gambar sama tinggi */
        .related-image {
            width: 100%;
            height: 220px;
            object-fit: cover;
            transition: transform .4s ease;
        }

        .related-card:hover .related-image {
            transform: scale(1.05);
        }

        .related-content {
            padding: 20px;

            /* KUNCI KONSISTENSI */
            display: flex;
            flex-direction: column;
            flex: 1;
        }

        .related-category {
            background: #0d6efd;
            color: #fff;
            padding: 5px 12px;
            border-radius: 30px;
            font-size: 12px;
            font-weight: 600;
            white-space: nowrap;
        }

        .related-date {
            font-size: 13px;
            color: #888;
        }

        /* Judul maksimal 2 baris */
        .related-title {
            margin-bottom: 5px;
            min-height: 20px;
        }

        .related-title a {
            color: #222;
            text-decoration: none;
            font-size: 18px;
            font-weight: 700;
            line-height: 1.5;

            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        .related-title a:hover {
            color: #0d6efd;
        }

        /* Ringkasan maksimal 3 baris */
        .related-summary {
            color: #666;
            line-height: 1.8;
            font-size: 15px;
            margin-bottom: 20px;

            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;

            min-height: 78px;
        }

        /* Tombol selalu di bawah */
        .read-more {
            color: #0d6efd;
            font-weight: 600;
            text-decoration: none;
            margin-top: auto;
        }

        .read-more:hover {
            color: #084298;
        }

        @media (max-width:768px) {

            .related-image {
                height: 200px;
            }

            .related-title {
                min-height: auto;
            }

            .related-summary {
                min-height: auto;
            }
        }

        .sidebar {

            position: sticky;

            top: 120px;

        }

        .sidebar-widget {

            background: #fff;

            border-radius: 15px;

            padding: 25px;

            box-shadow: 0 8px 25px rgba(0, 0, 0, .08);

        }

        .sidebar-title {

            font-size: 22px;

            font-weight: 700;

            margin-bottom: 20px;

            position: relative;

            padding-bottom: 12px;

        }

        .sidebar-title::after {

            content: '';

            position: absolute;

            left: 0;

            bottom: 0;

            width: 60px;

            height: 3px;

            background: #0d6efd;

            border-radius: 10px;

        }

        .sidebar-post {

            display: flex;

            gap: 15px;

            margin-bottom: 18px;

        }

        .sidebar-post:last-child {

            margin-bottom: 0;

        }

        .post-image img {

            width: 100px;

            height: 80px;

            border-radius: 10px;

            object-fit: cover;

            transition: .3s;

        }

        .post-image:hover img {

            transform: scale(1.05);

        }

        .post-content {

            flex: 1;

        }

        .post-title {

            display: block;

            color: #222;

            font-weight: 600;

            line-height: 1.5;

            margin-bottom: 8px;

            text-decoration: none;

            transition: .3s;

        }

        .post-title:hover {

            color: #0d6efd;

        }

        .post-content span {

            display: block;

            font-size: 13px;

            color: #777;

            margin-top: 4px;

        }

        .category-item {

            display: flex;

            justify-content: space-between;

            align-items: center;

            padding: 12px 15px;

            border-radius: 10px;

            background: #f8f9fa;

            color: #333;

            text-decoration: none;

            margin-bottom: 10px;

            transition: .3s;

        }

        .category-item:hover {

            background: #0d6efd;

            color: #fff;

        }

        .category-item .badge {

            background: #0d6efd;

            color: #fff;

        }

        .category-item:hover .badge {

            background: #fff;

            color: #0d6efd;

        }

        .content-berita img {
            max-width: 100%;
            height: auto;
            border-radius: 10px;
            margin: 20px 0;
        }

        .content-berita iframe {
            width: 100%;
            min-height: 450px;
        }

        .content-berita table {
            width: 100%;
            margin-bottom: 20px;
        }

        .content-berita p {
            line-height: 1.9;
            margin-bottom: 18px;
        }

        .content-berita h1,
        .content-berita h2,
        .content-berita h3,
        .content-berita h4 {
            margin-top: 25px;
            margin-bottom: 15px;
        }

        .content-berita ul,
        .content-berita ol {
            padding-left: 20px;
            margin-bottom: 20px;
        }
    </style>



@endsection
@push('scripts')
    {!! NoCaptcha::renderJs() !!}
@endpush
