@extends('layouts.backend')

@section('content')
    <div class="container">

        <h3 class="mb-4">Tambah Course Baru</h3>

        <form action="{{ route('admin-course.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            {{-- BASIC COURSE INFO --}}
            <div class="card mb-3">
                <div class="card-header">Data Kursus</div>
                <div class="card-body">

                    <div class="mb-3">
                        <label>Judul Kursus</label>
                        <input type="text" name="title" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label>Thumbnail Kursus</label>
                        <input type="file" name="image" class="form-control" accept="image/*">
                    </div>

                    <div class="mb-3">
                        <label>Kategori</label>
                        <select name="category" class="form-control" required>
                            <option value="kursus">Kursus</option>
                            <option value="kelas_paket">Kelas Paket</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label>Deskripsi</label>
                        <textarea name="description" class="form-control" rows="3"></textarea>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <label>Harga</label>
                            <input type="number" name="price" class="form-control">
                        </div>

                        <div class="col-md-4">
                            <label>Durasi (hari)</label>
                            <input type="number" name="duration_days" class="form-control">
                        </div>

                        <div class="col-md-4">
                            <label>Seat Tersedia</label>
                            <input type="number" name="seat_available" class="form-control">
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
                        <textarea name="overview_content" id="overview_content"></textarea>
                    </div>

                    <div class="mb-3">
                        <label>Video URL (YouTube)</label>
                        <input type="text" name="video_url" class="form-control">
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

                    <div class="curriculum-item border p-3 mb-2">
                        <input type="text" name="curriculums[0][title]" class="form-control mb-2"
                            placeholder="Judul Materi">
                        <textarea name="curriculums[0][description]" class="form-control" placeholder="Deskripsi"></textarea>
                    </div>

                </div>
            </div>

            {{-- INSTRUCTOR --}}
            <div class="card mb-3">
                <div class="card-header">Instructor</div>
                <div class="card-body">

                    <label>Pilih Instructor</label>
                    <select name="instructor_ids[]" class="form-control" multiple>
                        @foreach ($instructors as $ins)
                            <option value="{{ $ins->id }}">
                                {{ $ins->name }} - {{ $ins->position }}
                            </option>
                        @endforeach
                    </select>

                </div>
            </div>

            <button type="submit" class="btn btn-success">
                Simpan Course
            </button>

        </form>

    </div>

    {{-- SCRIPT DYNAMIC CURRICULUM --}}
    <script>
        let index = 1;

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
