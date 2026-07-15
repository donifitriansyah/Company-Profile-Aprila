@extends('layouts.backend')

@section('title', 'Data Peserta')

@section('content')

    <div class="card shadow-sm border-0">

        <div class="card-header bg-white d-flex justify-content-between align-items-center">
            <div>
                <h5 class="fw-bold mb-1">
                    <i class="bi bi-people-fill me-2"></i>
                    Data Peserta
                </h5>
                <small class="text-muted">
                    Manajemen data peserta pelatihan
                </small>
            </div>

            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalTambah">
                <i class="bi bi-plus-circle me-1"></i>
                Tambah Peserta
            </button>
        </div>


        <div class="card-body">

            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif


            <div class="table-responsive">

                <table class="table table-bordered table-striped align-middle">

                    <thead class="table-light">
                        <tr>
                            <th width="50">No</th>
                            <th>Nama Lengkap</th>
                            <th>NIK</th>
                            <th>Email</th>
                            <th>No HP</th>
                            <th>Alamat</th>
                            <th width="120">Aksi</th>
                        </tr>
                    </thead>


                    <tbody>

                        @forelse($pesertas as $peserta)
                            <tr>

                                <td>
                                    {{ $loop->iteration }}
                                </td>

                                <td>
                                    {{ $peserta->nama_lengkap }}
                                </td>

                                <td>
                                    {{ $peserta->nik ?? '-' }}
                                </td>

                                <td>
                                    {{ $peserta->email ?? '-' }}
                                </td>

                                <td>
                                    {{ $peserta->no_hp }}
                                </td>

                                <td>
                                    {{ $peserta->alamat ?? '-' }}
                                </td>


                                <td class="text-center">

                                    <button class="btn btn-sm btn-warning" data-bs-toggle="modal"
                                        data-bs-target="#modalEdit{{ $peserta->id }}">
                                        <i class="bi bi-pencil"></i>
                                    </button>


                                    <form action="{{ route('peserta.destroy', $peserta->id) }}" method="POST"
                                        class="d-inline" onsubmit="return confirm('Hapus data peserta?')">

                                        @csrf
                                        @method('DELETE')

                                        <button class="btn btn-sm btn-danger">
                                            <i class="bi bi-trash"></i>
                                        </button>

                                    </form>

                                </td>

                            </tr>


                        @empty

                            <tr>
                                <td colspan="7" class="text-center">
                                    Belum ada data peserta
                                </td>
                            </tr>
                        @endforelse

                    </tbody>

                </table>

            </div>

        </div>

    </div>




    {{-- ================= MODAL TAMBAH ================= --}}

    <div class="modal fade" id="modalTambah">

        <div class="modal-dialog modal-lg">

            <div class="modal-content">


                <form action="{{ route('peserta.store') }}" method="POST">

                    @csrf


                    <div class="modal-header">

                        <h5 class="modal-title">
                            Tambah Peserta
                        </h5>

                        <button type="button" class="btn-close" data-bs-dismiss="modal">
                        </button>

                    </div>



                    <div class="modal-body">


                        <div class="row">


                            <div class="col-md-6 mb-3">

                                <label class="form-label">
                                    Nama Lengkap
                                </label>

                                <input type="text" name="nama_lengkap" class="form-control" required>

                            </div>



                            <div class="col-md-6 mb-3">

                                <label class="form-label">
                                    NIK
                                </label>

                                <input type="text" name="nik" class="form-control">

                            </div>



                            <div class="col-md-6 mb-3">

                                <label class="form-label">
                                    Email
                                </label>

                                <input type="email" name="email" class="form-control">

                            </div>



                            <div class="col-md-6 mb-3">

                                <label class="form-label">
                                    No HP
                                </label>

                                <input type="text" name="no_hp" class="form-control" required>

                            </div>



                            <div class="col-md-12 mb-3">

                                <label class="form-label">
                                    Alamat
                                </label>

                                <textarea name="alamat" class="form-control" rows="3"></textarea>

                            </div>


                        </div>


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





    {{-- ================= MODAL EDIT ================= --}}

    @foreach ($pesertas as $peserta)
        <div class="modal fade" id="modalEdit{{ $peserta->id }}">


            <div class="modal-dialog modal-lg">


                <div class="modal-content">


                    <form action="{{ route('peserta.update', $peserta->id) }}" method="POST">


                        @csrf
                        @method('PUT')


                        <div class="modal-header">


                            <h5 class="modal-title">
                                Edit Peserta
                            </h5>


                            <button type="button" class="btn-close" data-bs-dismiss="modal">
                            </button>


                        </div>



                        <div class="modal-body">


                            <div class="row">


                                <div class="col-md-6 mb-3">


                                    <label class="form-label">
                                        Nama Lengkap
                                    </label>


                                    <input type="text" name="nama_lengkap" class="form-control"
                                        value="{{ $peserta->nama_lengkap }}" required>


                                </div>




                                <div class="col-md-6 mb-3">


                                    <label class="form-label">
                                        NIK
                                    </label>


                                    <input type="text" name="nik" class="form-control" value="{{ $peserta->nik }}">


                                </div>




                                <div class="col-md-6 mb-3">


                                    <label class="form-label">
                                        Email
                                    </label>


                                    <input type="email" name="email" class="form-control"
                                        value="{{ $peserta->email }}">


                                </div>




                                <div class="col-md-6 mb-3">


                                    <label class="form-label">
                                        No HP
                                    </label>


                                    <input type="text" name="no_hp" class="form-control"
                                        value="{{ $peserta->no_hp }}" required>


                                </div>




                                <div class="col-md-12 mb-3">


                                    <label class="form-label">
                                        Alamat
                                    </label>


                                    <textarea name="alamat" class="form-control" rows="3">{{ $peserta->alamat }}</textarea>


                                </div>



                            </div>

                        </div>

                        <div class="modal-footer">


                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">

                                Batal

                            </button>


                            <button class="btn btn-warning">

                                Update

                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endforeach


@endsection
