@extends('layouts.backend')

@section('content')

<div class="container">

    {{-- HEADER COURSE --}}
    <div class="card mb-4">
        <div class="card-body">

            <div class="row">
                <div class="col-md-4">
                    <img src="{{ asset('storage/'.$course->image) }}" class="img-fluid rounded">
                </div>

                <div class="col-md-8">

                    <h3>{{ $course->title }}</h3>

                    <p>{{ $course->description }}</p>

                    <p>
                        <strong>Kategori:</strong>
                        {{ ucfirst($course->category) }}
                    </p>

                    <p>
                        <strong>Harga:</strong>
                        Rp {{ number_format($course->price, 0, ',', '.') }}
                    </p>

                    <p>
                        <strong>Durasi:</strong> {{ $course->duration_days }} hari
                    </p>

                    <p>
                        <strong>Seat:</strong> {{ $course->seat_available }}
                    </p>

                </div>
            </div>

        </div>
    </div>

    {{-- TAB NAV --}}
    <div class="card">

        <div class="card-header">
            <ul class="nav nav-tabs card-header-tabs">

                <li class="nav-item">
                    <a class="nav-link active" data-bs-toggle="tab" href="#overview">
                        Overview
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" href="#curriculum">
                        Fasilitas
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" href="#instructor">
                        Instructor
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" href="#reviews">
                        Reviews
                    </a>
                </li>

            </ul>
        </div>

        <div class="card-body">

            <div class="tab-content">

                {{-- OVERVIEW --}}
                <div class="tab-pane p-3 fade show active" id="overview">

                    <h5>Overview</h5>

                    <p>
                        {{ optional($course->overview)->content }}
                    </p>

                    @if(optional($course->overview)->video_url)
                        <div class="ratio ratio-16x9">
                            <iframe src="{{ optional($course->overview)->video_url }}"
                                allowfullscreen></iframe>
                        </div>
                    @endif

                </div>

                {{-- CURRICULUM --}}
                <div class="tab-pane p-3 fade" id="curriculum">

                    <h5>Curriculum</h5>

                    <ul class="list-group">

                        @forelse($course->curriculums as $cur)
                            <li class="list-group-item">
                                <strong>{{ $cur->title }}</strong>
                                <p class="mb-0">{{ $cur->description }}</p>
                            </li>
                        @empty
                            <li class="list-group-item">
                                Belum ada curriculum
                            </li>
                        @endforelse

                    </ul>

                </div>

                {{-- INSTRUCTOR --}}
                <div class="tab-pane p-3 fade" id="instructor">

                    <h5>Instructor</h5>

                    <div class="row">

                        @forelse($course->instructors as $ins)
                            <div class="col-md-4 text-center mb-3">

                                <img src="{{ asset($ins->photo) }}"
                                    class="rounded-circle mb-2"
                                    width="100" height="100">

                                <h6>{{ $ins->name }}</h6>

                                <small class="text-muted">
                                    {{ $ins->position }}
                                </small>

                                <p>{{ $ins->bio }}</p>

                            </div>
                        @empty
                            <p>Tidak ada instructor</p>
                        @endforelse

                    </div>

                </div>

                {{-- REVIEWS --}}
                <div class="tab-pane p-3 fade" id="reviews">

                    <h5>Reviews</h5>

                    {{-- LIST --}}
                    @forelse($course->reviews as $review)
                        <div class="border p-3 mb-2">

                            <strong>{{ $review->name }}</strong>

                            <div>
                                @for($i = 1; $i <= 5; $i++)
                                    @if($i <= $review->rating)
                                        ★
                                    @else
                                        ☆
                                    @endif
                                @endfor
                            </div>

                            <p class="mb-0">{{ $review->comment }}</p>

                        </div>
                    @empty
                        <p>Belum ada review</p>
                    @endforelse

                    {{-- FORM REVIEW --}}
                    <hr>

                    <form action="#" method="POST">
                        @csrf

                        <input type="hidden" name="course_id" value="{{ $course->id }}">

                        <div class="mb-2">
                            <input type="text" name="name" class="form-control" placeholder="Nama">
                        </div>

                        <div class="mb-2">
                            <select name="rating" class="form-control">
                                <option value="5">5 Bintang</option>
                                <option value="4">4 Bintang</option>
                                <option value="3">3 Bintang</option>
                                <option value="2">2 Bintang</option>
                                <option value="1">1 Bintang</option>
                            </select>
                        </div>

                        <div class="mb-2">
                            <textarea name="comment" class="form-control" placeholder="Komentar"></textarea>
                        </div>

                        <button class="btn btn-primary">
                            Kirim Review
                        </button>

                    </form>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection
