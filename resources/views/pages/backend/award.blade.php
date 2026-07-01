@extends('layouts.backend')

@section('content')
    <div class="page-heading mb-3">
        <h3>Prestasi</h3>
    </div>

    <div class="page-content">
        <div class="container-fluid">

            {{-- HEADER --}}
            <div class="card mb-3">
                <div class="card-body d-flex justify-content-between align-items-center">

                    <div>
                        <h5 class="mb-0">Data Prestasi</h5>
                        <small class="text-muted">Kelola Prestasi</small>
                    </div>

                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalKategori">
                        + Tambah Prestasi
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

            {{-- TABLE --}}
            <div class="card">
                <div class="card-body">

                    <div class="table-responsive">

                        <table class="table table-bordered" id="table1">

                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Image</th>
                                    <th>Title</th>
                                    <th>Institution</th>
                                    <th>Order</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($awards as $award)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>
                                            @if ($award->image)
                                                <img src="{{ asset('storage/' . $award->image) }}" width="60">
                                            @endif
                                        </td>

                                        <td>{{ $award->title }}</td>
                                        <td>{{ $award->institution }}</td>
                                        <td>{{ $award->order }}</td>

                                        <td>
                                            @if ($award->is_active)
                                                <span class="badge bg-success">Active</span>
                                            @else
                                                <span class="badge bg-danger">Inactive</span>
                                            @endif
                                        </td>

                                        <td>
                                            <a href="{{ route('award.edit', $award->id) }}"
                                                class="btn btn-warning btn-sm">Edit</a>

                                            <form action="{{ route('award.destroy', $award->id) }}" method="POST"
                                                class="d-inline">
                                                @csrf
                                                @method('DELETE')

                                                <button class="btn btn-danger btn-sm" onclick="return confirm('Hapus?')">
                                                    Delete
                                                </button>
                                            </form>
                                        </td>

                                    </tr>

                                    <div class="modal fade" id="modalEdit{{ $award->id }}" tabindex="-1">
                                        <div class="modal-dialog">

                                            <form action="{{ route('award.update', $award->id) }}" method="POST"
                                                enctype="multipart/form-data">
                                                @csrf
                                                @method('PUT')

                                                <div class="modal-content">

                                                    <div class="modal-header">
                                                        <h5>Edit Prestasi</h5>
                                                        <button type="button" class="btn-close"
                                                            data-bs-dismiss="modal"></button>
                                                    </div>

                                                    <div class="modal-body">

                                                        <input type="text" name="title" class="form-control mb-2"
                                                            value="{{ $award->title }}" required>

                                                        <input type="text" name="institution" class="form-control mb-2"
                                                            value="{{ $award->institution }}">

                                                        <textarea name="description" class="form-control mb-2">{{ $award->description }}</textarea>

                                                        <input type="number" name="order" class="form-control mb-2"
                                                            value="{{ $award->order }}">

                                                        @if ($award->image)
                                                            <div class="mb-2">
                                                                <img src="{{ asset('storage/' . $award->image) }}"
                                                                    width="80">
                                                            </div>
                                                        @endif

                                                        <input type="file" name="image" class="form-control mb-2">

                                                        <select name="is_active" class="form-control">
                                                            <option value="1"
                                                                {{ $award->is_active ? 'selected' : '' }}>Active</option>
                                                            <option value="0"
                                                                {{ !$award->is_active ? 'selected' : '' }}>Inactive
                                                            </option>
                                                        </select>

                                                    </div>

                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Close</button>
                                                        <button class="btn btn-primary">Update</button>
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

    <div class="modal fade" id="modalKategori" tabindex="-1">
        <div class="modal-dialog">

            <form action="{{ route('award.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="modal-content">

                    <div class="modal-header">
                        <h5>Tambah Prestasi</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>

                    <div class="modal-body">

                        <input type="text" name="title" class="form-control mb-2" placeholder="Judul Prestasi"
                            required>

                        <input type="text" name="institution" class="form-control mb-2" placeholder="Institution">

                        <textarea name="description" class="form-control mb-2" placeholder="Deskripsi"></textarea>

                        <input type="number" name="order" class="form-control mb-2" placeholder="Order">

                        <input type="file" name="image" class="form-control mb-2">

                        <select name="is_active" class="form-control">
                            <option value="1">Active</option>
                            <option value="0">Inactive</option>
                        </select>

                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button class="btn btn-success">Simpan</button>
                    </div>

                </div>

            </form>

        </div>
    </div>
@endsection
