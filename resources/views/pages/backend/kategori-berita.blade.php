@extends('layouts.backend')

@section('title', 'Kategori Berita')

@section('content')

    <div class="page-heading mb-3">
        <h3>Kategori Berita</h3>
    </div>

    <div class="page-content">
        <div class="container-fluid">

            {{-- HEADER --}}
            <div class="card mb-3">
                <div class="card-body d-flex justify-content-between align-items-center">

                    <div>
                        <h5 class="mb-0">Data Kategori</h5>
                        <small class="text-muted">Kelola kategori berita</small>
                    </div>

                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalKategori">
                        + Tambah Kategori
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
                        <table class="table table-hover align-middle" id="table1">

                            <thead class="table-light">
                                <tr>
                                    <th width="60">No</th>
                                    <th>Nama</th>
                                    <th>Slug</th>
                                    <th width="150">Aksi</th>
                                </tr>
                            </thead>

                            <tbody>
                                @forelse($kategori as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td class="fw-semibold">{{ $item->nama }}</td>
                                        <td class="text-muted">{{ $item->slug }}</td>

                                        <td>
                                            <button class="btn btn-warning btn-sm" data-bs-toggle="modal"
                                                data-bs-target="#modalEdit{{ $item->id }}">
                                                Edit
                                            </button>

                                            <form action="{{ route('admin-kategori-berita.destroy', $item->id) }}"
                                                method="POST" class="form-delete">

                                                @csrf
                                                @method('DELETE')

                                                <button type="submit" class="btn btn-danger btn-sm">
                                                    Hapus
                                                </button>

                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    {{-- JANGAN TR, cukup kosong saja --}}
                                @endforelse
                            </tbody>

                        </table>
                    </div>

                </div>
            </div>

        </div>
    </div>

    {{-- ================= CREATE MODAL ================= --}}
    <div class="modal fade" id="modalKategori" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">

                <form action="{{ route('admin-kategori-berita.store') }}" method="POST">
                    @csrf

                    <div class="modal-header">
                        <h5 class="modal-title">Tambah Kategori</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>

                    <div class="modal-body">
                        <label class="form-label">Nama Kategori</label>
                        <input type="text" name="nama" class="form-control" required>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                            Batal
                        </button>
                        <button class="btn btn-primary">
                            Simpan
                        </button>
                    </div>

                </form>

            </div>
        </div>
    </div>

    {{-- ================= EDIT MODAL ================= --}}
    @foreach ($kategori as $item)
        <div class="modal fade" id="modalEdit{{ $item->id }}" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">

                    <form action="{{ route('admin-kategori-berita.update', $item->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="modal-header">
                            <h5 class="modal-title">Edit Kategori</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>

                        <div class="modal-body">
                            <label class="form-label">Nama Kategori</label>
                            <input type="text" name="nama" class="form-control" value="{{ $item->nama }}" required>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                Batal
                            </button>
                            <button class="btn btn-primary">
                                Update
                            </button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    @endforeach


    <!-- DATATABLE -->
    <script>
        $(document).ready(function() {
            $('#datatableKategori').DataTable({
                responsive: true,
                pageLength: 10,
                destroy: true
            });
        });
    </script>

    <!-- SWEET ALERT DELETE -->
    <script>
        $(document).on('submit', '.form-delete', function(e) {

            e.preventDefault();

            let form = this;

            Swal.fire({
                title: 'Yakin hapus data?',
                text: 'Data tidak bisa dikembalikan!',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Ya, hapus!',
                cancelButtonText: 'Batal'
            }).then((result) => {

                if (result.isConfirmed) {
                    form.submit();
                }

            });

        });
    </script>

    <!-- SUCCESS ALERT -->
    @if (session('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Berhasil',
                text: "{{ session('success') }}",
                timer: 2000,
                showConfirmButton: false
            });
        </script>
    @endif

    <!-- ERROR ALERT -->
    @if (session('error'))
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Gagal',
                text: "{{ session('error') }}"
            });
        </script>
    @endif

    <!-- AUTO OPEN MODAL VALIDATION ERROR -->
    @if ($errors->any())
        <script>
            $(document).ready(function() {
                $('#modalKategori').modal('show');
            });
        </script>
    @endif
@endsection
