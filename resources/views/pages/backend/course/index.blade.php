@extends('layouts.backend')

@section('content')
    <div class="page-heading mb-3">
        <h3>Data Kursus</h3>
    </div>

    <div class="page-content">
        <div class="container-fluid">

            {{-- HEADER --}}
            <div class="card mb-3">
                <div class="card-body d-flex justify-content-between align-items-center">

                    <div>
                        <h5 class="mb-0">Data Kursus</h5>
                        <small class="text-muted">Kelola Data Kursus</small>
                    </div>

                    <a href="{{ route('admin-course.create') }}" class="btn btn-primary">
                        + Tambah Kursus
                    </a>

                </div>
            </div>

            {{-- ALERT --}}
            @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            @if (session('error'))
                <div class="alert alert-danger">{{ session('error') }}</div>
            @endif

            {{-- TABLE --}}
            <div class="card">
                <div class="card-body">

                    <div class="table-responsive">

                        <table class="table table-hover align-middle"id="table1">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Judul</th>
                                    <th>Kategori</th>
                                    <th>Harga</th>
                                    <th>Durasi</th>
                                    <th>Seat</th>
                                    <th>Instructor</th>
                                    <th width="200">Aksi</th>
                                </tr>
                            </thead>

                            <tbody>
                                @forelse($courses as $course)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>

                                        <td>
                                            <strong>{{ $course->title }}</strong>
                                        </td>

                                        <td>
                                            @if ($course->category == 'kursus')
                                                <span class="badge bg-success">Kursus</span>
                                            @else
                                                <span class="badge bg-info">Kelas Paket</span>
                                            @endif
                                        </td>

                                        <td>
                                            Rp {{ number_format($course->price, 0, ',', '.') }}
                                        </td>

                                        <td>
                                            {{ $course->duration_days }} hari
                                        </td>

                                        <td>
                                            {{ $course->seat_available }}
                                        </td>

                                        <td>
                                            @foreach ($course->instructors as $ins)
                                                <span class="badge bg-secondary">
                                                    {{ $ins->name }}
                                                </span>
                                            @endforeach
                                        </td>

                                        <td>
                                            <a href="{{ route('admin-course.show', $course->id) }}"
                                                class="btn btn-sm btn-info">
                                                Detail
                                            </a>

                                            <a href="{{ route('admin-course.edit', $course->id) }}"
                                                class="btn btn-sm btn-warning">
                                                Edit
                                            </a>

                                            <form action="{{ route('admin-course.destroy', $course->id) }}" method="POST"
                                                class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-sm btn-danger"
                                                    onclick="return confirm('Hapus data ini?')">
                                                    Delete
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="8" class="text-center">
                                            Belum ada data kursus
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>

        </div>
    </div>
     <!-- DATATABLE -->
    
@endsection
