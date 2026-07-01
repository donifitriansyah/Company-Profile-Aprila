@extends('layouts.frontend')

@section('content')

<!-- START COURSE DETAIL -->
<section class="our_event section-padding">

    <div class="container">
        <div class="row">

            {{-- LEFT CONTENT --}}
            <div class="col-lg-8 col-sm-8 col-xs-12">

                {{-- HEADER COURSE --}}
                <div class="single_event_single">

                    <img class="img-fluid"
                         src="{{ asset('storage/'.$course->image) }}"
                         alt="{{ $course->title }}" />

                    <div class="single_event_text_single">

                        <h4>{{ $course->title }}</h4>

                        {{-- <span><i class="fa fa-calendar"></i> {{ $course->start_date ?? '-' }}</span> --}}

                        <span><i class="fa fa-clock-o"></i> {{ $course->duration_days }} Hari</span>



                        <p>{{ $course->description }}</p>

                    </div>

                </div>

                {{-- TAB SECTION --}}
                <div class="course-details-content section-bg">

                    <ul class="nav nav-tabs">

                        <li class="nav-item">
                            <a href="#overview" class="nav-link active" data-bs-toggle="tab">Overview</a>
                        </li>

                        <li class="nav-item">
                            <a href="#curriculum" class="nav-link" data-bs-toggle="tab">Fasilitas</a>
                        </li>

                        <li class="nav-item">
                            <a href="#instructor" class="nav-link" data-bs-toggle="tab">Instructor</a>
                        </li>

                        <li class="nav-item">
                            <a href="#reviews" class="nav-link" data-bs-toggle="tab">Reviews</a>
                        </li>

                    </ul>

                    <div class="tab-content">

                        {{-- OVERVIEW --}}
                        <div class="tab-pane fade show active p-3" id="overview">

                            <p>
                                {!! optional($course->overview)->content !!}
                            </p>



                        </div>

                        {{-- CURRICULUM --}}
                        <div class="tab-pane fade p-3" id="curriculum">

                            @forelse($course->curriculums as $cur)
                                <div class="mb-3">
                                    <h5>{{ $cur->title }}</h5>
                                    <p>{{ $cur->description }}</p>
                                </div>
                            @empty
                                <p>Belum ada data</p>
                            @endforelse

                        </div>

                        {{-- INSTRUCTOR --}}
                        <div class="tab-pane fade p-3" id="instructor">

                            <div class="row">

                                @forelse($course->instructors as $ins)

                                    <div class="col-md-4 text-center mb-4">

                                        <img src="{{ asset('storage/'.$ins->photo) }}"
                                             class="rounded-circle"
                                             width="120"
                                             height="120"
                                             style="object-fit: cover;">

                                        <h5 class="mt-2">{{ $ins->name }}</h5>

                                        <span>{{ $ins->position }}</span>

                                        <p>{{ $ins->bio }}</p>

                                    </div>

                                @empty
                                    <p>Tidak ada instructor</p>
                                @endforelse

                            </div>

                        </div>

                        {{-- REVIEWS --}}
                        <div class="tab-pane fade p-3" id="reviews">

                            {{-- LIST --}}
                            @forelse($course->reviews as $review)

                                <div class="mb-3 border p-3">

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

                                    <p>{{ $review->comment }}</p>

                                </div>

                            @empty
                                <p>Belum ada review</p>
                            @endforelse

                            {{-- FORM REVIEW (dummy endpoint) --}}
                            <hr>

                            {{-- <form action="#" method="POST">
                                @csrf

                                <input type="hidden" name="course_id" value="{{ $course->id }}">

                                <input type="text" name="name" class="form-control mb-2" placeholder="Nama">

                                <select name="rating" class="form-control mb-2">
                                    <option value="5">5 Star</option>
                                    <option value="4">4 Star</option>
                                    <option value="3">3 Star</option>
                                    <option value="2">2 Star</option>
                                    <option value="1">1 Star</option>
                                </select>

                                <textarea name="comment" class="form-control mb-2" placeholder="Komentar"></textarea>

                                <button class="btn btn-primary">Kirim Review</button>

                            </form> --}}

                        </div>

                    </div>

                </div>

            </div>

            {{-- RIGHT SIDEBAR --}}
            <div class="col-lg-4 col-sm-4 col-xs-12">

                <div class="course_features">
                    <h3>Detail</h3>
                    <ul>
                        <li><i class="fa fa-calendar"></i> Duration <b>{{ $course->duration_days }} days</b></li>
                        <li><i class="fa fa-user"></i> Students <b>{{ $course->seat_available }}</b></li>
                        {{-- <li><i class="fa fa-trophy"></i> Certification <b>YES</b></li> --}}
                    </ul>
                </div>

                <div class="event_info_price">
                    <h4>
                        Biaya - Rp {{ $course->price }}
                    </h4>
                </div>

                <div class="event_info_register">
                    <a class="btn_one" href="#">Daftar Sekarang</a>
                </div>

            </div>

        </div>
    </div>

</section>

@endsection
