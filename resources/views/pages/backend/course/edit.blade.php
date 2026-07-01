@extends('layouts.backend')

@section('content')
    <div class="container">

        <h3 class="mb-4">Edit Course</h3>
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('admin-course.update', $course->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            {{-- BASIC COURSE INFO --}}
            <div class="card mb-3">
                <div class="card-header">Data Kursus</div>
                <div class="card-body">

                    <div class="mb-3">
                        <label>Judul Kursus</label>
                        <input type="text" name="title" class="form-control" value="{{ $course->title }}" required>
                    </div>

                    <div class="mb-3">
                        <label>Ganti Thumbnail</label>
                        <input type="file" name="image" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label>Kategori</label>
                        <select name="category" class="form-control">
                            <option value="kursus" {{ $course->category == 'kursus' ? 'selected' : '' }}>
                                Kursus
                            </option>
                            <option value="kelas_paket" {{ $course->category == 'kelas_paket' ? 'selected' : '' }}>
                                Kelas Paket
                            </option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label>Deskripsi</label>
                        <textarea name="description" class="form-control" rows="3">{{ $course->description }}</textarea>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <label>Harga</label>
                            <input type="number" name="price" class="form-control" value="{{ $course->price }}">
                        </div>

                        <div class="col-md-4">
                            <label>Durasi (hari)</label>
                            <input type="number" name="duration_days" class="form-control"
                                value="{{ $course->duration_days }}">
                        </div>

                        <div class="col-md-4">
                            <label>Seat Tersedia</label>
                            <input type="number" name="seat_available" class="form-control"
                                value="{{ $course->seat_available }}">
                        </div>
                    </div>

                </div>
            </div>

            {{-- OVERVIEW --}}
            <div class="card mb-3">
                <div class="card-header">Overview</div>
                <div class="card-body">

                    <div class="mb-3">
                        <label>Konten Overview</label>

                        <textarea name="overview_content" id="overview_content">
                        {!! optional($course->overview)->content !!}
                    </textarea>
                    </div>

                    <div class="mb-3">
                        <label>Video URL</label>
                        <input type="text" name="video_url" class="form-control"
                            value="{{ optional($course->overview)->video_url }}">
                    </div>

                </div>
            </div>

            {{-- CURRICULUM --}}
            <div class="card mb-3">
                <div class="card-header d-flex justify-content-between">
                    <span>Fasilitas</span>
                    <button type="button" class="btn btn-sm btn-primary" onclick="addCurriculum()">
                        + Tambah
                    </button>
                </div>

                <div class="card-body" id="curriculum-wrapper">

                    @foreach ($course->curriculums as $i => $cur)
                        <div class="curriculum-item border p-3 mb-2">
                            <input type="text" name="curriculums[{{ $i }}][title]" class="form-control mb-2"
                                value="{{ $cur->title }}">

                            <textarea name="curriculums[{{ $i }}][description]" class="form-control">{{ $cur->description }}</textarea>
                        </div>
                    @endforeach

                </div>
            </div>

            {{-- INSTRUCTOR --}}
            <div class="card mb-3">
                <div class="card-header">Instructor</div>
                <div class="card-body">

                    <label>Pilih Instructor</label>
                    <select name="instructor_ids[]" class="form-control" multiple>

                        @foreach ($instructors as $ins)
                            <option value="{{ $ins->id }}"
                                {{ $course->instructors->contains($ins->id) ? 'selected' : '' }}>
                                {{ $ins->name }} - {{ $ins->position }}
                            </option>
                        @endforeach

                    </select>

                </div>
            </div>

            <button type="submit" class="btn btn-success">
                Update Course
            </button>

        </form>

    </div>

    {{-- ADD CURRICULUM --}}
    <script>
        let index = {{ $course->curriculums->count() }};

        function addCurriculum() {
            let html = `
        <div class="curriculum-item border p-3 mb-2">
            <input type="text" name="curriculums[${index}][title]" class="form-control mb-2" placeholder="Judul Materi">
            <textarea name="curriculums[${index}][description]" class="form-control" placeholder="Deskripsi"></textarea>
        </div>
        `;

            document.getElementById('curriculum-wrapper').insertAdjacentHTML('beforeend', html);
            index++;
        }
    </script>
    <script>
        $(document).ready(function() {
            $('#overview_content').summernote({
                height: 200,
                placeholder: 'Tulis overview kursus di sini...',
                toolbar: [
                    ['style', ['bold', 'italic', 'underline', 'clear']],
                    ['font', ['fontsize', 'color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['insert', ['link']],
                    ['view', ['fullscreen', 'codeview']]
                ]
            });
        });
    </script>
@endsection
