@extends('layouts.backend')

@section('title', 'Data Klien')

@section('content')
    <div class="container-fluid">

        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show">
                {{ session('success') }}
                <button class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        <div class="card shadow-sm">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h4 class="mb-0">Data Klien & Mitra</h4>

                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createModal">
                    <i class="fas fa-plus"></i> Tambah Klien
                </button>
            </div>

            <div class="card-body">

                <div class="table-responsive">
                    <table class="table table-bordered table-striped" id="table1">
                        <thead class="table-dark">
                            <tr>
                                <th width="60">No</th>
                                <th width="120">Logo</th>
                                <th>Nama</th>
                                <th>Website</th>
                                <th width="100">Urutan</th>
                                <th width="100">Status</th>
                                <th width="180">Aksi</th>
                            </tr>
                        </thead>

                        <tbody>

                            @foreach ($clients as $client)
                                <tr>

                                    <td>{{ $loop->iteration }}</td>

                                    <td class="text-center">
                                        <img src="{{ asset('storage/' . $client->logo) }}" width="80"
                                            class="img-thumbnail">
                                    </td>

                                    <td>{{ $client->name }}</td>

                                    <td>
                                        @if ($client->website)
                                            <a href="{{ $client->website }}" target="_blank">
                                                {{ $client->website }}
                                            </a>
                                        @else
                                            -
                                        @endif
                                    </td>

                                    <td>{{ $client->sort_order }}</td>

                                    <td>
                                        @if ($client->is_active)
                                            <span class="badge bg-success">Aktif</span>
                                        @else
                                            <span class="badge bg-danger">Nonaktif</span>
                                        @endif
                                    </td>

                                    <td>

                                        <button class="btn btn-warning" data-bs-toggle="modal"
                                            data-bs-target="#editModal{{ $client->id }}">
                                            Edit
                                        </button>

                                        <form action="{{ route('admin-klien.destroy', $client->id) }}" method="POST"
                                            class="d-inline">

                                            @csrf
                                            @method('DELETE')

                                            <button onclick="return confirm('Hapus data ini?')"
                                                class="btn btn-danger btn-sm">

                                                Hapus

                                            </button>

                                        </form>

                                    </td>

                                </tr>

                                <div class="modal fade" id="editModal{{ $client->id }}">
                                    <div class="modal-dialog">
                                        <form action="{{ route('admin-klien.update', $client->id) }}" method="POST"
                                            enctype="multipart/form-data">

                                            @csrf
                                            @method('PUT')

                                            <div class="modal-content">

                                                <div class="modal-header">
                                                    <h5>Edit Klien</h5>
                                                </div>

                                                <div class="modal-body">

                                                    <input type="text" name="name" value="{{ $client->name }}"
                                                        class="form-control">

                                                    <input type="file" name="logo" class="form-control mt-3">

                                                </div>

                                                <div class="modal-footer">
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

    {{-- Modal Tambah --}}
    <div class="modal fade" id="createModal">

        <div class="modal-dialog modal-lg">

            <form action="{{ route('admin-klien.store') }}" method="POST" enctype="multipart/form-data">

                @csrf

                <div class="modal-content">

                    <div class="modal-header">
                        <h5>Tambah Klien</h5>

                        <button class="btn-close" data-bs-dismiss="modal"></button>
                    </div>

                    <div class="modal-body">

                        <div class="mb-3">
                            <label>Nama</label>
                            <input type="text" name="name" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label>Logo</label>
                            <input type="file" name="logo" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label>Website</label>
                            <input type="url" name="website" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label>Deskripsi</label>
                            <textarea name="description" class="form-control"></textarea>
                        </div>

                        <div class="row">

                            <div class="col-md-6">
                                <label>Urutan</label>
                                <input type="number" name="sort_order" class="form-control" value="0">
                            </div>

                            <div class="col-md-6">

                                <label>Status</label>

                                <select name="is_active" class="form-select">

                                    <option value="1">Aktif</option>
                                    <option value="0">Nonaktif</option>

                                </select>

                            </div>

                        </div>

                    </div>

                    <div class="modal-footer">

                        <button class="btn btn-secondary" data-bs-dismiss="modal">
                            Tutup
                        </button>

                        <button class="btn btn-primary">
                            Simpan
                        </button>

                    </div>

                </div>

            </form>

        </div>

    </div>


@endsection
