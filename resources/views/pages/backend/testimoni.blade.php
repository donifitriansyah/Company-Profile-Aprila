@extends('layouts.backend')

@section('title', 'Data Testimoni')

@section('content')

    <div class="page-heading">
        <div class="page-title mb-3">
            <div class="row">
                <div class="col-md-6">
                    <h3>Data Testimoni</h3>
                </div>
                <div class="col-md-6 text-md-end">
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createModal">
                        Tambah Testimoni
                    </button>
                </div>
            </div>
        </div>

        <section class="section">

            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show">
                    {{ session('success') }}
                    <button class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            @endif

            <div class="card">
                <div class="card-header">
                    <h4>Daftar Testimoni</h4>
                </div>

                <div class="modal fade" id="createModal" tabindex="-1">
                    <div class="modal-dialog modal-lg">
                        <form action="{{ route('admin-testimoni.store') }}" method="POST" enctype="multipart/form-data">

                            @csrf

                            <div class="modal-content">

                                <div class="modal-header">
                                    <h5 class="modal-title">Tambah Testimoni</h5>
                                    <button class="btn-close" data-bs-dismiss="modal"></button>
                                </div>

                                <div class="modal-body">

                                    <div class="row">

                                        <div class="col-md-6 mb-3">
                                            <label>Nama</label>
                                            <input type="text" name="nama" class="form-control" required>
                                        </div>

                                        <div class="col-md-6 mb-3">
                                            <label>Jabatan</label>
                                            <input type="text" name="jabatan" class="form-control">
                                        </div>

                                        <div class="col-md-6 mb-3">
                                            <label>Instansi</label>
                                            <input type="text" name="instansi" class="form-control">
                                        </div>

                                        <div class="col-md-6 mb-3">
                                            <label>Rating</label>
                                            <select name="rating" class="form-select">
                                                @for ($i = 1; $i <= 5; $i++)
                                                    <option value="{{ $i }}">{{ $i }} Bintang</option>
                                                @endfor
                                            </select>
                                        </div>

                                        <div class="col-md-6 mb-3">
                                            <label>Urutan</label>
                                            <input type="number" name="urutan" value="0" class="form-control">
                                        </div>

                                        <div class="col-md-6 mb-3">
                                            <label>Tanggal</label>
                                            <input type="date" name="tanggal_testimoni" class="form-control">
                                        </div>

                                        <div class="col-12 mb-3">
                                            <label>Isi Testimoni</label>
                                            <textarea name="isi_testimoni" rows="5" class="form-control" required></textarea>
                                        </div>

                                        <div class="col-md-6 mb-3">
                                            <label>Foto</label>
                                            <input type="file" name="foto" class="form-control">
                                        </div>

                                        <div class="col-md-6 mb-3 d-flex align-items-center">
                                            <div class="form-check mt-4">
                                                <input class="form-check-input" type="checkbox" name="is_active"
                                                    value="1" checked>

                                                <label class="form-check-label">
                                                    Aktif
                                                </label>
                                            </div>
                                        </div>

                                    </div>

                                </div>

                                <div class="modal-footer">
                                    <button class="btn btn-secondary" data-bs-dismiss="modal">
                                        Batal
                                    </button>

                                    <button class="btn btn-primary">
                                        Simpan
                                    </button>
                                </div>

                            </div>

                        </form>
                    </div>
                </div>

                <div class="card-body table-responsive">

                    <table class="table table-bordered table-hover align-middle" id="table1">
                        <thead class="table-light">
                            <tr class="text-center">
                                <th width="60">No</th>
                                <th width="90">Foto</th>
                                <th>Nama</th>
                                <th>Jabatan</th>
                                <th>Instansi</th>
                                <th>Rating</th>
                                <th>Status</th>
                                <th>Urutan</th>
                                <th width="170">Aksi</th>
                            </tr>
                        </thead>

                        <tbody>

                            @forelse($testimonis as $item)

                                <tr>

                                    <td class="text-center">
                                        {{ $loop->iteration + ($testimonis->firstItem() - 1) }}
                                    </td>

                                    <td class="text-center">
                                        @if ($item->foto)
                                            <img src="{{ asset('storage/' . $item->foto) }}" width="70"
                                                class="img-thumbnail">
                                        @else
                                            <span class="text-muted">-</span>
                                        @endif
                                    </td>

                                    <td>
                                        <strong>{{ $item->nama }}</strong>
                                    </td>

                                    <td>{{ $item->jabatan ?? '-' }}</td>

                                    <td>{{ $item->instansi ?? '-' }}</td>

                                    <td class="text-center">

                                        @for ($i = 1; $i <= 5; $i++)
                                            @if ($i <= $item->rating)
                                                ⭐
                                            @else
                                                ☆
                                            @endif
                                        @endfor

                                    </td>

                                    <td class="text-center">

                                        @if ($item->is_active)
                                            <span class="badge bg-success">
                                                Aktif
                                            </span>
                                        @else
                                            <span class="badge bg-danger">
                                                Nonaktif
                                            </span>
                                        @endif

                                    </td>

                                    <td class="text-center">
                                        {{ $item->urutan }}
                                    </td>

                                    <td class="text-center">

                                        <button class="btn btn-warning btn-sm" data-bs-toggle="modal"
                                            data-bs-target="#editModal{{ $item->id }}">
                                            <i class="bi bi-pencil"></i>
                                        </button>

                                        <form action="{{ route('admin-testimoni.destroy', $item->id) }}" method="POST"
                                            class="d-inline"
                                            onsubmit="return confirm('Yakin ingin menghapus testimoni ini?')">

                                            @csrf
                                            @method('DELETE')

                                            <button class="btn btn-danger btn-sm">
                                                <i class="bi bi-trash"></i>
                                            </button>

                                        </form>

                                    </td>

                                </tr>

                            @empty

                                <tr>
                                    <td colspan="9" class="text-center">
                                        Belum ada data testimoni.
                                    </td>
                                </tr>

                            @endforelse

                            @foreach ($testimonis as $item)
                                <div class="modal fade" id="editModal{{ $item->id }}" tabindex="-1">

                                    <div class="modal-dialog modal-lg">

                                        <form action="{{ route('admin-testimoni.update', $item->id) }}" method="POST"
                                            enctype="multipart/form-data">

                                            @csrf
                                            @method('PUT')

                                            <div class="modal-content">

                                                <div class="modal-header">
                                                    <h5 class="modal-title">
                                                        Edit Testimoni
                                                    </h5>

                                                    <button class="btn-close" data-bs-dismiss="modal"></button>
                                                </div>

                                                <div class="modal-body">

                                                    <div class="row">

                                                        <div class="col-md-6 mb-3">
                                                            <label>Nama</label>
                                                            <input type="text" name="nama" class="form-control"
                                                                value="{{ $item->nama }}" required>
                                                        </div>

                                                        <div class="col-md-6 mb-3">
                                                            <label>Jabatan</label>
                                                            <input type="text" name="jabatan" class="form-control"
                                                                value="{{ $item->jabatan }}">
                                                        </div>

                                                        <div class="col-md-6 mb-3">
                                                            <label>Instansi</label>
                                                            <input type="text" name="instansi" class="form-control"
                                                                value="{{ $item->instansi }}">
                                                        </div>

                                                        <div class="col-md-6 mb-3">
                                                            <label>Rating</label>

                                                            <select name="rating" class="form-select">

                                                                @for ($i = 1; $i <= 5; $i++)
                                                                    <option value="{{ $i }}"
                                                                        {{ $item->rating == $i ? 'selected' : '' }}>
                                                                        {{ $i }} Bintang
                                                                    </option>
                                                                @endfor

                                                            </select>

                                                        </div>

                                                        <div class="col-md-6 mb-3">
                                                            <label>Urutan</label>
                                                            <input type="number" name="urutan" class="form-control"
                                                                value="{{ $item->urutan }}">
                                                        </div>

                                                        <div class="col-md-6 mb-3">
                                                            <label>Tanggal</label>
                                                            <input type="date" name="tanggal_testimoni"
                                                                class="form-control"
                                                                value="{{ $item->tanggal_testimoni }}">
                                                        </div>

                                                        <div class="col-12 mb-3">
                                                            <label>Isi Testimoni</label>

                                                            <textarea name="isi_testimoni" rows="5" class="form-control" required>{{ $item->isi_testimoni }}</textarea>
                                                        </div>

                                                        <div class="col-md-6 mb-3">

                                                            <label>Foto Baru</label>

                                                            <input type="file" name="foto" class="form-control">

                                                            @if ($item->foto)
                                                                <img src="{{ asset('storage/' . $item->foto) }}"
                                                                    width="100" class="mt-2 rounded">
                                                            @endif

                                                        </div>

                                                        <div class="col-md-6 d-flex align-items-center">

                                                            <div class="form-check mt-4">

                                                                <input type="checkbox" class="form-check-input"
                                                                    name="is_active" value="1"
                                                                    {{ $item->is_active ? 'checked' : '' }}>

                                                                <label class="form-check-label">
                                                                    Aktif
                                                                </label>

                                                            </div>

                                                        </div>

                                                    </div>

                                                </div>

                                                <div class="modal-footer">

                                                    <button class="btn btn-secondary" data-bs-dismiss="modal">
                                                        Batal
                                                    </button>

                                                    <button class="btn btn-success">
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

                    <div class="mt-3">
                        {{ $testimonis->links() }}
                    </div>

                </div>
            </div>

        </section>

    </div>

@endsection
