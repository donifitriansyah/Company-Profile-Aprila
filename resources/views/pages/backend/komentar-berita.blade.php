@extends('layouts.backend')

@section('title', 'Komentar Berita')

@section('content')

    <div class="page-heading mb-3">

        <h3>Komentar Berita</h3>

    </div>

    <div class="page-content">

        <div class="container-fluid">

            <div class="card mb-3">

                <div class="card-body">

                    <form method="GET">

                        <div class="row">

                            <div class="col-md-4">

                                <select name="status" class="form-select" onchange="this.form.submit()">

                                    <option value="">Semua Status</option>

                                    <option value="pending" {{ request('status') == 'pending' ? 'selected' : '' }}>

                                        Menunggu

                                    </option>

                                    <option value="approved" {{ request('status') == 'approved' ? 'selected' : '' }}>

                                        Disetujui

                                    </option>

                                </select>

                            </div>

                        </div>

                    </form>

                </div>

            </div>

            <div class="card">

                <div class="card-body">

                    <div class="table-responsive">

                        <table class="table table-bordered" id="datatableKomentar">

                            <thead>

                                <tr>

                                    <th>No</th>

                                    <th>Berita</th>

                                    <th>Nama</th>

                                    <th>Email</th>

                                    <th>Komentar</th>

                                    <th>Status</th>

                                    <th>Tanggal</th>

                                    <th width="200">Aksi</th>

                                </tr>

                            </thead>

                            <tbody>

                                @foreach ($komentar as $item)
                                    <tr>

                                        <td>{{ $loop->iteration }}</td>

                                        <td>{{ $item->berita->judul }}</td>

                                        <td>{{ $item->nama }}</td>

                                        <td>{{ $item->email ?: '-' }}</td>

                                        <td>{{ Str::limit($item->komentar, 80) }}</td>

                                        <td>

                                            @if ($item->is_approved)
                                                <span class="badge bg-success">

                                                    Disetujui

                                                </span>
                                            @else
                                                <span class="badge bg-warning">

                                                    Menunggu

                                                </span>
                                            @endif

                                        </td>

                                        <td>

                                            {{ $item->created_at->format('d M Y') }}

                                        </td>

                                        <td>

                                            @if (!$item->is_approved)
                                                <form action="{{ route('admin-komentar-berita.approve', $item->id) }}"
                                                    method="POST" class="d-inline">

                                                    @csrf
                                                    @method('PUT')

                                                    <button class="btn btn-success btn-sm">

                                                        Approve

                                                    </button>

                                                </form>
                                            @else
                                                <form action="{{ route('admin-komentar-berita.reject', $item->id) }}"
                                                    method="POST" class="d-inline">

                                                    @csrf
                                                    @method('PUT')

                                                    <button class="btn btn-warning btn-sm">

                                                        Batalkan

                                                    </button>

                                                </form>
                                            @endif

                                            <form action="{{ route('admin-komentar-berita.destroy', $item->id) }}"
                                                method="POST" class="d-inline form-delete">

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

@endsection

@push('scripts')
    <script>
        $('#datatableKomentar').DataTable({
            responsive: true
        });

        $(document).on('submit', '.form-delete', function(e) {

            e.preventDefault();

            let form = this;

            Swal.fire({

                title: 'Hapus komentar?',

                text: 'Komentar akan dihapus permanen.',

                icon: 'warning',

                showCancelButton: true,

                confirmButtonText: 'Ya',

                cancelButtonText: 'Batal',

                confirmButtonColor: '#dc3545'

            }).then((result) => {

                if (result.isConfirmed) {

                    form.submit();

                }

            });

        });
    </script>
@endpush
