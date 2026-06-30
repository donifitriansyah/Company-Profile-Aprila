@extends('layouts.backend')

@section('title', 'Galeri Berita')

@section('content')

    <div class="page-heading mb-3">
        <h3>Galeri Berita</h3>
        <p class="text-muted">{{ $berita->judul }}</p>
    </div>

    <div class="page-content">
        <div class="container-fluid">

            <div class="card mb-3">
                <div class="card-body d-flex justify-content-between align-items-center">

                    <div>

                        <h5 class="mb-0">Galeri Gambar</h5>

                        <small class="text-muted">
                            Total {{ $galeri->count() }} gambar
                        </small>

                    </div>

                    <div>

                        <a href="{{ route('admin-berita.index') }}" class="btn btn-secondary">
                            Kembali
                        </a>

                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalTambah">

                            + Tambah Gambar

                        </button>

                    </div>

                </div>
            </div>

            <div class="row">

                @forelse($galeri as $item)
                    <div class="col-lg-3 col-md-4 mb-4">

                        <div class="card h-100 shadow-sm">

                            <img src="{{ asset('storage/' . $item->gambar) }}" class="card-img-top"
                                style="height:220px;object-fit:cover;">

                            <div class="card-body">

                                <p class="mb-1">

                                    {{ $item->caption ?: '-' }}

                                </p>

                                <span class="badge bg-primary">

                                    Urutan {{ $item->urutan }}

                                </span>

                            </div>

                            <div class="card-footer bg-white">

                                <button class="btn btn-warning btn-sm" data-bs-toggle="modal"
                                    data-bs-target="#edit{{ $item->id }}">

                                    Edit

                                </button>

                                <form action="{{ route('admin-galeri-berita.destroy', $item->id) }}" method="POST"
                                    class="d-inline form-delete">

                                    @csrf
                                    @method('DELETE')

                                    <button class="btn btn-danger btn-sm">

                                        Hapus

                                    </button>

                                </form>

                            </div>

                        </div>

                    </div>

                    @include('pages.backend.galeri-berita.edit', ['galeri' => $item])

                @empty

                    <div class="col-12">

                        <div class="alert alert-info">

                            Belum ada gambar.

                        </div>

                    </div>
                @endforelse

            </div>

        </div>
    </div>

    @include('pages.backend.galeri-berita.create')

    <script>
        $(document).on('submit', '.form-delete', function(e) {

            e.preventDefault();

            let form = this;

            Swal.fire({
                title: 'Hapus gambar?',
                text: 'Gambar yang dihapus tidak dapat dikembalikan.',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#dc3545',
                cancelButtonColor: '#6c757d',
                confirmButtonText: 'Ya, Hapus',
                cancelButtonText: 'Batal'
            }).then((result) => {

                if (result.isConfirmed) {
                    form.submit();
                }

            });

        });
    </script>

@endsection
