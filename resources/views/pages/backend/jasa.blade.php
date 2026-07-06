@extends('layouts.backend')

@section('title', 'Data Jasa')

@section('content')

    <div class="page-heading">

        <div class="page-title mb-3">
            <div class="row">

                <div class="col-md-6">
                    <h3>Data Jasa</h3>
                </div>

                <div class="col-md-6 text-end">
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalTambahJasa">
                        <i class="bi bi-plus-circle"></i> Tambah Jasa
                    </button>
                </div>

                <!-- Modal Tambah -->
                <div class="modal fade" id="modalTambahJasa" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-xl">
                        <form action="{{ route('admin-jasa.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="modal-content">

                                <div class="modal-header">
                                    <h5 class="modal-title">Tambah Jasa</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                </div>

                                <div class="modal-body">

                                    <div class="row">

                                        <div class="col-md-6 mb-3">
                                            <label>Nama Jasa</label>
                                            <input type="text" name="nama" class="form-control" required>
                                        </div>

                                        <div class="col-md-6 mb-3">
                                            <label>Kategori</label>
                                            <input type="text" name="kategori" class="form-control">
                                        </div>

                                        <div class="col-md-6 mb-3">
                                            <label>Harga Mulai</label>
                                            <input type="number" name="harga_mulai" class="form-control">
                                        </div>

                                        <div class="col-md-6 mb-3">
                                            <label>Satuan Harga</label>
                                            <input type="text" name="satuan_harga" class="form-control"
                                                placeholder="/Project /Bulan">
                                        </div>

                                        <div class="col-md-6 mb-3">
                                            <label>Estimasi Pengerjaan</label>
                                            <input type="text" name="estimasi_pengerjaan" class="form-control">
                                        </div>

                                        <div class="col-md-6 mb-3">
                                            <label>WhatsApp</label>
                                            <input type="text" name="whatsapp" class="form-control">
                                        </div>

                                        <div class="col-md-6 mb-3">
                                            <label>Urutan</label>
                                            <input type="number" name="urutan" value="0" class="form-control">
                                        </div>

                                        <div class="col-md-6 mb-3">
                                            <label>Gambar</label>
                                            <input type="file" name="gambar" class="form-control">
                                        </div>

                                        <div class="col-12 mb-3">
                                            <label>Deskripsi Singkat</label>
                                            <textarea name="deskripsi_singkat" rows="3" class="form-control"></textarea>
                                        </div>

                                        <div class="col-12 mb-3">
                                            <label>Deskripsi Lengkap</label>
                                            <textarea name="deskripsi" rows="6" class="form-control"></textarea>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="unggulan"
                                                    value="1">

                                                <label class="form-check-label">
                                                    Jasa Unggulan
                                                </label>
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="form-check">
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
                    <h4>Daftar Jasa</h4>
                </div>

                <div class="card-body">

                    <div class="table-responsive">

                        <table class="table table-bordered table-hover align-middle">

                            <thead class="table-light">

                                <tr class="text-center">

                                    <th width="60">No</th>
                                    <th width="90">Gambar</th>
                                    <th>Nama</th>
                                    <th>Kategori</th>
                                    <th>Harga Mulai</th>
                                    <th>Unggulan</th>
                                    <th>Status</th>
                                    <th>Urutan</th>
                                    <th width="160">Aksi</th>

                                </tr>

                            </thead>

                            <tbody>

                                @forelse($jasas as $item)

                                    <tr>

                                        <td class="text-center">
                                            {{ $loop->iteration + ($jasas->firstItem() - 1) }}
                                        </td>

                                        <td class="text-center">

                                            @if ($item->gambar)
                                                <img src="{{ asset('storage/' . $item->gambar) }}" width="70"
                                                    class="img-thumbnail">
                                            @else
                                                <span class="text-muted">-</span>
                                            @endif

                                        </td>

                                        <td>

                                            <strong>{{ $item->nama }}</strong>

                                            <br>

                                            <small class="text-muted">
                                                {{ $item->slug }}
                                            </small>

                                        </td>

                                        <td>
                                            {{ $item->kategori ?? '-' }}
                                        </td>

                                        <td>

                                            @if ($item->harga_mulai)
                                                Rp {{ number_format($item->harga_mulai, 0, ',', '.') }}

                                                @if ($item->satuan_harga)
                                                    / {{ $item->satuan_harga }}
                                                @endif
                                            @else
                                                -
                                            @endif

                                        </td>

                                        <td class="text-center">

                                            @if ($item->unggulan)
                                                <span class="badge bg-primary">
                                                    Ya
                                                </span>
                                            @else
                                                <span class="badge bg-secondary">
                                                    Tidak
                                                </span>
                                            @endif

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
                                                data-bs-target="#modalEdit{{ $item->id }}">
                                                <i class="bi bi-pencil-square"></i>
                                            </button>

                                            <form action="{{ route('admin-jasa.destroy', $item->id) }}" method="POST"
                                                class="d-inline"
                                                onsubmit="return confirm('Yakin ingin menghapus jasa ini?')">

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

                                            Belum ada data jasa.

                                        </td>

                                    </tr>

                                @endforelse

                                @foreach ($jasas as $item)
                                    <div class="modal fade" id="modalEdit{{ $item->id }}" tabindex="-1">
                                        <div class="modal-dialog modal-xl">

                                            <form action="{{ route('admin-jasa.update', $item->id) }}" method="POST"
                                                enctype="multipart/form-data">

                                                @csrf
                                                @method('PUT')

                                                <div class="modal-content">

                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Edit Jasa</h5>

                                                        <button class="btn-close" data-bs-dismiss="modal"></button>
                                                    </div>

                                                    <div class="modal-body">

                                                        <div class="row">

                                                            <div class="col-md-6 mb-3">
                                                                <label>Nama Jasa</label>
                                                                <input type="text" class="form-control" name="nama"
                                                                    value="{{ $item->nama }}" required>
                                                            </div>

                                                            <div class="col-md-6 mb-3">
                                                                <label>Kategori</label>
                                                                <input type="text" class="form-control"
                                                                    name="kategori" value="{{ $item->kategori }}">
                                                            </div>

                                                            <div class="col-md-6 mb-3">
                                                                <label>Harga Mulai</label>
                                                                <input type="number" class="form-control"
                                                                    name="harga_mulai" value="{{ $item->harga_mulai }}">
                                                            </div>

                                                            <div class="col-md-6 mb-3">
                                                                <label>Satuan Harga</label>
                                                                <input type="text" class="form-control"
                                                                    name="satuan_harga"
                                                                    value="{{ $item->satuan_harga }}">
                                                            </div>

                                                            <div class="col-md-6 mb-3">
                                                                <label>Estimasi Pengerjaan</label>
                                                                <input type="text" class="form-control"
                                                                    name="estimasi_pengerjaan"
                                                                    value="{{ $item->estimasi_pengerjaan }}">
                                                            </div>

                                                            <div class="col-md-6 mb-3">
                                                                <label>WhatsApp</label>
                                                                <input type="text" class="form-control"
                                                                    name="whatsapp" value="{{ $item->whatsapp }}">
                                                            </div>

                                                            <div class="col-md-6 mb-3">
                                                                <label>Urutan</label>
                                                                <input type="number" class="form-control" name="urutan"
                                                                    value="{{ $item->urutan }}">
                                                            </div>

                                                            <div class="col-md-6 mb-3">
                                                                <label>Gambar Baru</label>
                                                                <input type="file" class="form-control"
                                                                    name="gambar">

                                                                @if ($item->gambar)
                                                                    <img src="{{ asset('storage/' . $item->gambar) }}"
                                                                        width="120" class="img-thumbnail mt-2">
                                                                @endif
                                                            </div>

                                                            <div class="col-12 mb-3">
                                                                <label>Deskripsi Singkat</label>

                                                                <textarea name="deskripsi_singkat" rows="3" class="form-control">{{ $item->deskripsi_singkat }}</textarea>
                                                            </div>

                                                            <div class="col-12 mb-3">
                                                                <label>Deskripsi Lengkap</label>

                                                                <textarea name="deskripsi" rows="6" class="form-control">{{ $item->deskripsi }}</textarea>
                                                            </div>

                                                            <div class="col-md-3">

                                                                <div class="form-check">

                                                                    <input type="checkbox" class="form-check-input"
                                                                        name="unggulan" value="1"
                                                                        {{ $item->unggulan ? 'checked' : '' }}>

                                                                    <label class="form-check-label">
                                                                        Jasa Unggulan
                                                                    </label>

                                                                </div>

                                                            </div>

                                                            <div class="col-md-3">

                                                                <div class="form-check">

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
                                                            Tutup
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

                    </div>

                    <div class="mt-3">

                        {{ $jasas->links() }}

                    </div>

                </div>

            </div>

        </section>

    </div>

@endsection
