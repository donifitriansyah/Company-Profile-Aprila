@extends('layouts.backend')

@section('title', 'Program Pelatihan')

@section('content')

    <div class="card shadow-sm border-0">

        <div class="card-header bg-white d-flex justify-content-between align-items-center">

            <div>
                <h5 class="fw-bold mb-1">
                    <i class="bi bi-mortarboard-fill me-2"></i>
                    Program Pelatihan
                </h5>

                <small class="text-muted">
                    Manajemen program pelatihan
                </small>
            </div>


            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalTambah">

                <i class="bi bi-plus-circle me-1"></i>
                Tambah Program

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

                            <th width="50">
                                No
                            </th>

                            <th>
                                Nama Program
                            </th>

                            <th>
                                Durasi JP
                            </th>

                            <th>
                                Periode
                            </th>

                            <th>
                                Status
                            </th>

                            <th width="120">
                                Aksi
                            </th>

                        </tr>

                    </thead>



                    <tbody>


                        @forelse($programPelatihans as $program)
                            <tr>


                                <td>
                                    {{ $loop->iteration }}
                                </td>


                                <td>

                                    <strong>
                                        {{ $program->nama_program }}
                                    </strong>

                                    <br>

                                    <small class="text-muted">
                                        {{ Str::limit($program->deskripsi, 80) }}
                                    </small>

                                </td>


                                <td>
                                    {{ $program->durasi_jp }} JP
                                </td>


                                <td>

                                    {{ $program->tanggal_mulai?->format('d-m-Y') }}

                                    s/d

                                    {{ $program->tanggal_selesai?->format('d-m-Y') }}

                                </td>



                                <td>


                                    @if ($program->status)
                                        <span class="badge bg-success">
                                            Aktif
                                        </span>
                                    @else
                                        <span class="badge bg-secondary">
                                            Tidak Aktif
                                        </span>
                                    @endif


                                </td>



                                <td class="text-center">

                                    <a href="{{ route('program-detail.index', $program->id) }}" class="btn btn-sm btn-info">

                                        <i class="bi bi-list-ul"></i>
                                        

                                    </a>


                                    <button class="btn btn-sm btn-warning" data-bs-toggle="modal"
                                        data-bs-target="#modalEdit{{ $program->id }}">

                                        <i class="bi bi-pencil"></i>

                                    </button>



                                    <form action="{{ route('program-pelatihan.destroy', $program->id) }}" method="POST"
                                        class="d-inline" onsubmit="return confirm('Hapus program pelatihan ini?')">


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

                                <td colspan="6" class="text-center">

                                    Belum ada program pelatihan

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


                <form action="{{ route('program-pelatihan.store') }}" method="POST">


                    @csrf


                    <div class="modal-header">

                        <h5 class="modal-title">
                            Tambah Program Pelatihan
                        </h5>


                        <button type="button" class="btn-close" data-bs-dismiss="modal">
                        </button>

                    </div>




                    <div class="modal-body">


                        <div class="row">



                            <div class="col-md-12 mb-3">


                                <label class="form-label">
                                    Nama Program
                                </label>


                                <input type="text" name="nama_program" class="form-control" required>


                            </div>




                            <div class="col-md-12 mb-3">


                                <label class="form-label">
                                    Deskripsi
                                </label>


                                <textarea name="deskripsi" class="form-control" rows="3"></textarea>


                            </div>




                            <div class="col-md-4 mb-3">


                                <label class="form-label">
                                    Durasi JP
                                </label>


                                <input type="number" name="durasi_jp" class="form-control" required>


                            </div>




                            <div class="col-md-4 mb-3">


                                <label class="form-label">
                                    Tanggal Mulai
                                </label>


                                <input type="date" name="tanggal_mulai" class="form-control" required>


                            </div>




                            <div class="col-md-4 mb-3">


                                <label class="form-label">
                                    Tanggal Selesai
                                </label>


                                <input type="date" name="tanggal_selesai" class="form-control" required>


                            </div>




                            <div class="col-md-12 mb-3">


                                <label class="form-label">
                                    Status
                                </label>


                                <select name="status" class="form-select">


                                    <option value="1">
                                        Aktif
                                    </option>


                                    <option value="0">
                                        Tidak Aktif
                                    </option>


                                </select>


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


    @foreach ($programPelatihans as $program)
        <div class="modal fade" id="modalEdit{{ $program->id }}">


            <div class="modal-dialog modal-lg">


                <div class="modal-content">


                    <form action="{{ route('program-pelatihan.update', $program->id) }}" method="POST">


                        @csrf
                        @method('PUT')



                        <div class="modal-header">


                            <h5 class="modal-title">
                                Edit Program Pelatihan
                            </h5>


                            <button type="button" class="btn-close" data-bs-dismiss="modal">
                            </button>


                        </div>





                        <div class="modal-body">


                            <div class="row">



                                <div class="col-md-12 mb-3">


                                    <label class="form-label">
                                        Nama Program
                                    </label>


                                    <input type="text" name="nama_program" class="form-control"
                                        value="{{ $program->nama_program }}" required>


                                </div>




                                <div class="col-md-12 mb-3">


                                    <label class="form-label">
                                        Deskripsi
                                    </label>


                                    <textarea name="deskripsi" class="form-control" rows="3">{{ $program->deskripsi }}</textarea>


                                </div>




                                <div class="col-md-4 mb-3">


                                    <label class="form-label">
                                        Durasi JP
                                    </label>


                                    <input type="number" name="durasi_jp" class="form-control"
                                        value="{{ $program->durasi_jp }}" required>


                                </div>




                                <div class="col-md-4 mb-3">


                                    <label class="form-label">
                                        Tanggal Mulai
                                    </label>


                                    <input type="date" name="tanggal_mulai" class="form-control"
                                        value="{{ $program->tanggal_mulai?->format('Y-m-d') }}" required>


                                </div>




                                <div class="col-md-4 mb-3">


                                    <label class="form-label">
                                        Tanggal Selesai
                                    </label>


                                    <input type="date" name="tanggal_selesai" class="form-control"
                                        value="{{ $program->tanggal_selesai?->format('Y-m-d') }}" required>


                                </div>




                                <div class="col-md-12 mb-3">


                                    <label class="form-label">
                                        Status
                                    </label>


                                    <select name="status" class="form-select">


                                        <option value="1" {{ $program->status ? 'selected' : '' }}>

                                            Aktif

                                        </option>


                                        <option value="0" {{ !$program->status ? 'selected' : '' }}>

                                            Tidak Aktif

                                        </option>


                                    </select>


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
