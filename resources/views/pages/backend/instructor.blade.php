@extends('layouts.backend')

@section('content')

    <div class="page-heading mb-3">
        <h3>Data Instruktur</h3>
    </div>

    <div class="page-content">
        <div class="container-fluid">

            {{-- HEADER --}}
            <div class="card mb-3">
                <div class="card-body d-flex justify-content-between align-items-center">

                    <div>
                        <h5 class="mb-0">Data Instruktur</h5>
                        <small class="text-muted">Kelola data Instruktur</small>
                    </div>

                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalCreate">
                        + Tambah Instruktur
                    </button>

                </div>
            </div>

            {{-- ALERT --}}
            @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            @if (session('error'))
                <div class="alert alert-danger">{{ session('error') }}</div>
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
            {{-- TABLE --}}
            <div class="card">
                <div class="card-body">

                    <div class="table-responsive">
                        <table class="table table-hover align-middle" id="table1">

                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Photo</th>
                                    <th>Nama</th>
                                    <th>Jabatan</th>
                                    <th>Kategori</th>
                                    <th>Bio</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>

                            <tbody>

                                @foreach ($instructors as $i => $ins)
                                    <tr>
                                        <td>{{ $i + 1 }}</td>

                                        <td>
                                            @if ($ins->photo)
                                                <img src="{{ asset('storage/' . $ins->photo) }}" width="60"
                                                    height="60" style="object-fit: cover;" class="rounded-circle">
                                            @else
                                                -
                                            @endif
                                        </td>

                                        <td>{{ $ins->name ?? '-' }}</td>
                                        <td>{{ $ins->position ?? '-' }}</td>

                                        {{-- KATEGORI BARU --}}
                                        <td>
                                            @if ($ins->category == 'instruktur')
                                                <span class="badge bg-success">Instruktur</span>
                                            @else
                                                <span class="badge bg-info">Tim</span>
                                            @endif
                                        </td>

                                        <td>{{ \Illuminate\Support\Str::limit($ins->bio, 40) }}</td>

                                        <td>

                                            <button class="btn btn-sm btn-warning" data-bs-toggle="modal"
                                                data-bs-target="#modalEdit{{ $ins->id }}">
                                                Edit
                                            </button>

                                            <form action="{{ route('admin-instructor.destroy', $ins->id) }}" method="POST"
                                                class="d-inline">

                                                @csrf
                                                @method('DELETE')

                                                <button class="btn btn-sm btn-danger"
                                                    onclick="return confirm('Hapus data?')">
                                                    Delete
                                                </button>

                                            </form>

                                        </td>
                                    </tr>

                                    {{-- ================= EDIT MODAL ================= --}}
                                    <div class="modal fade" id="modalEdit{{ $ins->id }}" tabindex="-1">
                                        <div class="modal-dialog">

                                            <form action="{{ route('admin-instructor.update', $ins->id) }}" method="POST"
                                                enctype="multipart/form-data">

                                                @csrf
                                                @method('PUT')

                                                <div class="modal-content">

                                                    <div class="modal-header">
                                                        <h5>Edit Instructor</h5>
                                                        <button type="button" class="btn-close"
                                                            data-bs-dismiss="modal"></button>
                                                    </div>

                                                    <div class="modal-body">

                                                        <input type="text" name="name" class="form-control mb-2"
                                                            value="{{ $ins->name }}" placeholder="Nama">

                                                        <input type="text" name="position" class="form-control mb-2"
                                                            value="{{ $ins->position }}" placeholder="Jabatan">

                                                        {{-- CATEGORY --}}
                                                        <select name="category" class="form-control mb-2">
                                                            <option value="instruktur"
                                                                {{ $ins->category == 'instruktur' ? 'selected' : '' }}>
                                                                Instruktur
                                                            </option>
                                                            <option value="tim"
                                                                {{ $ins->category == 'tim' ? 'selected' : '' }}>
                                                                Tim
                                                            </option>
                                                        </select>

                                                        <textarea name="bio" class="form-control mb-2" placeholder="Bio">{{ $ins->bio }}</textarea>

                                                        <input type="file" name="photo" class="form-control">

                                                    </div>

                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">
                                                            Close
                                                        </button>
                                                        <button class="btn btn-primary">
                                                            Update
                                                        </button>
                                                    </div>

                                                </div>

                                            </form>

                                        </div>
                                    </div>
                                @endforeach

                            </tbody>

                        </table>
                    </div>

                </div>
            </div>

        </div>
    </div>

    {{-- ================= CREATE MODAL ================= --}}
    <div class="modal fade" id="modalCreate" tabindex="-1">
        <div class="modal-dialog">

            <form action="{{ route('admin-instructor.store') }}" method="POST" enctype="multipart/form-data">

                @csrf

                <div class="modal-content">

                    <div class="modal-header">
                        <h5>Tambah Instructor</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>

                    <div class="modal-body">

                        <input type="text" name="name" class="form-control mb-2" placeholder="Nama">

                        <input type="text" name="position" class="form-control mb-2" placeholder="Jabatan">

                        {{-- CATEGORY --}}
                        <select name="category" class="form-control mb-2">
                            <option value="instruktur">Instruktur</option>
                            <option value="tim">Tim</option>
                        </select>

                        <textarea name="bio" class="form-control mb-2" placeholder="Bio"></textarea>

                        <input type="file" name="photo" class="form-control">

                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                            Close
                        </button>
                        <button class="btn btn-success">
                            Simpan
                        </button>
                    </div>

                </div>

            </form>

        </div>
    </div>

    {{-- DATATABLE --}}
    <script>
        $(document).ready(function() {
            $('#datatableKategori').DataTable({
                responsive: true,
                pageLength: 10,
                destroy: true
            });
        });
    </script>

@endsection
