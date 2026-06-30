@extends('layouts.frontend')

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

                <div class="col-lg-12">

                    <article class="arti_single">

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

                        {{-- Judul --}}
                        <h2 class="mb-4">

                            {{ $berita->judul }}

                        </h2>

                        {{-- Ringkasan --}}
                        @if ($berita->ringkasan)
                            <div class="alert alert-light border-start border-4 border-primary mb-4">

                                {{ $berita->ringkasan }}

                            </div>
                        @endif

                        {{-- Isi --}}
                        <div class="content-berita">

                            {!! $berita->isi !!}

                        </div>

                    </article>


                    {{-- GALERI --}}
                    @if ($berita->galeri->count())

                        <div class="mt-5">

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

                    <div class="comments_part mt-5">

                        <h3 class="blog_head_title">

                            Komentar ({{ $berita->komentar->where('is_approved', true)->count() }})

                        </h3>

                        @forelse($berita->komentar->where('is_approved', true) as $item)
                            <div class="single_comment">

                                <h4>{{ $item->nama }}</h4>

                                <small class="text-muted">

                                    {{ $item->created_at->format('d M Y H:i') }}

                                </small>

                                <p class="mt-2">

                                    {{ $item->komentar }}

                                </p>

                            </div>

                        @empty

                            <div class="alert alert-light">

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






                    {{-- KATEGORI --}}
                    @if ($kategori->count())

                        <div class="mt-5">

                            <h3>

                                Kategori

                            </h3>

                            <div class="mt-3">

                                @foreach ($kategori as $item)
                                    <a href="{{ route('berita', ['kategori' => $item->slug]) }}"
                                        class="badge bg-light text-dark border p-2 me-2 mb-2">

                                        {{ $item->nama }}

                                        ({{ $item->total_berita }})
                                    </a>
                                @endforeach

                            </div>

                        </div>

                    @endif


                    {{-- BERITA TERBARU --}}
                    @if ($beritaTerbaru->count())

                        <div class="mt-5">

                            <h3 class="mb-4">

                                Berita Lainnya

                            </h3>

                            <div class="row">

                                @foreach ($beritaTerbaru as $item)
                                    @if ($item->id != $berita->id)
                                        <div class="col-lg-4 col-md-6 mb-4">

                                            <div class="single_blog">

                                                @if ($item->thumbnail)
                                                    <img src="{{ asset('storage/' . $item->thumbnail) }}" class="img-fluid"
                                                        style="height:230px;width:100%;object-fit:cover;">
                                                @endif

                                                <div class="content_box">

                                                    <span>

                                                        {{ $item->published_at?->format('d M Y') }}

                                                        |

                                                        {{ $item->kategori->nama }}

                                                    </span>

                                                    <h2>

                                                        <a href="{{ route('detail-berita', $item->slug) }}">

                                                            {{ Str::limit($item->judul, 70) }}

                                                        </a>

                                                    </h2>

                                                    <a class="btn_one" href="{{ route('detail-berita', $item->slug) }}">

                                                        Baca Selengkapnya

                                                        <i class="ti-arrow-top-right"></i>

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

            </div>

        </div>

    </section>
    <style>
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
