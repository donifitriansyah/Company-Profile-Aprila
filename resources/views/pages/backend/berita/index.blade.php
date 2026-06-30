@extends('layouts.backend')

@section('title', 'Berita')

@section('content')

    <div class="page-heading mb-3">
        <h3>Berita</h3>
    </div>

    <div class="page-content">
        <div class="container-fluid">

            <div class="card mb-3">
                <div class="card-body d-flex justify-content-between align-items-center">

                    <div>
                        <h5 class="mb-0">Data Berita</h5>
                        <small class="text-muted">
                            Kelola berita website
                        </small>
                    </div>

                    <a href="{{ route('admin-berita.create') }}" class="btn btn-primary">
                        + Tambah Berita
                    </a>

                </div>
            </div>

            <div class="card">
                <div class="card-body">

                    <div class="table-responsive">

                        <table class="table table-hover align-middle" id="datatableBerita">

                            <thead class="table-light">

                                <tr>
                                    <th width="50">No</th>
                                    <th width="100">Thumbnail</th>
                                    <th>Judul</th>
                                    <th>Kategori</th>
                                    <th>Penulis</th>
                                    <th>Status</th>
                                    <th>Views</th>
                                    <th>Publish</th>
                                    <th width="140">Aksi</th>
                                </tr>

                            </thead>

                            <tbody>

                                @foreach ($berita as $item)
                                    <tr>

                                        <td>{{ $loop->iteration }}</td>

                                        <td>

                                            @if ($item->thumbnail)
                                                <img src="{{ asset('storage/' . $item->thumbnail) }}" width="80"
                                                    class="img-thumbnail">
                                            @else
                                                <span class="badge bg-secondary">
                                                    Tidak ada
                                                </span>
                                            @endif

                                        </td>

                                        <td>

                                            <strong>{{ $item->judul }}</strong>

                                            @if ($item->is_featured)
                                                <br>

                                                <span class="badge bg-warning">
                                                    Featured
                                                </span>
                                            @endif

                                        </td>

                                        <td>

                                            {{ $item->kategori->nama }}

                                        </td>

                                        <td>

                                            {{ $item->user->name ?? '-' }}

                                        </td>

                                        <td>

                                            @if ($item->status == 'publish')
                                                <span class="badge bg-success">
                                                    Publish
                                                </span>
                                            @else
                                                <span class="badge bg-secondary">
                                                    Draft
                                                </span>
                                            @endif

                                        </td>

                                        <td>

                                            {{ number_format($item->views) }}

                                        </td>

                                        <td>

                                            {{ optional($item->published_at)->format('d M Y') ?? '-' }}

                                        </td>

                                        <td>
                                            <a href="{{ route('admin-galeri-berita.index', ['berita' => $item->id]) }}"
                                                class="btn btn-success btn-sm">
                                                Galeri
                                            </a>
                                            <a href="{{ route('admin-berita.edit', $item->id) }}"
                                                class="btn btn-warning btn-sm">
                                                Edit
                                            </a>

                                            <form action="{{ route('admin-berita.destroy', $item->id) }}" method="POST"
                                                class="d-inline form-delete">

                                                @csrf
                                                @method('DELETE')

                                                <button class="btn btn-danger btn-sm">

                                                    Hapus

                                                </button>

                                            </form>

                                        </td>

                                    </tr>
                                @endforeach

                            </tbody>

                        </table>

                    </div>

                </div>
            </div>

        </div>
    </div>

    <script>
        $(document).ready(function() {

            $('#datatableBerita').DataTable({
                responsive: true,
                pageLength: 10
            });

            $(document).on('submit', '.form-delete', function(e) {

                e.preventDefault();

                let form = this;

                Swal.fire({
                    title: 'Yakin ingin menghapus?',
                    text: 'Data tidak dapat dikembalikan.',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Ya, Hapus!',
                    cancelButtonText: 'Batal',
                    confirmButtonColor: '#dc3545',
                    cancelButtonColor: '#6c757d'
                }).then(function(result) {

                    if (result.isConfirmed) {
                        form.submit();
                    }

                });

            });

        });
    </script>
@endsection
