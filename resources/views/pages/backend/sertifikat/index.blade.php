@extends('layouts.backend')

@section('title', 'Data Sertifikat')

@section('content')

    <div class="card shadow-sm border-0">

        <div class="card-header bg-white d-flex justify-content-between align-items-center">

            <div>
                <h5 class="fw-bold mb-1">
                    <i class="bi bi-award-fill me-2"></i>
                    Data Sertifikat
                </h5>

                <small class="text-muted">
                    Manajemen sertifikat peserta pelatihan
                </small>
            </div>


            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalTambah">

                <i class="bi bi-plus-circle me-1"></i>
                Tambah Sertifikat

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
                                Peserta
                            </th>

                            <th>
                                Program
                            </th>

                            <th>
                                Nomor Sertifikat
                            </th>

                            <th>
                                Tanggal
                            </th>

                            <th>
                                Status
                            </th>

                            <th width="220">
                                Aksi
                            </th>

                        </tr>

                    </thead>


                    <tbody>


                        @forelse($sertifikats as $sertifikat)
                            <tr>

                                <td>
                                    {{ $loop->iteration }}
                                </td>


                                <td>
                                    {{ $sertifikat->peserta->nama_lengkap ?? '-' }}
                                </td>


                                <td>
                                    {{ $sertifikat->programPelatihan->nama_program ?? '-' }}
                                </td>


                                <td>
                                    {{ $sertifikat->nomor_sertifikat }}
                                </td>


                                <td>
                                    {{ $sertifikat->tanggal_terbit?->format('d-m-Y') }}
                                </td>


                                <td>


                                    @if ($sertifikat->status)
                                        <span class="badge bg-success">
                                            Terbit
                                        </span>
                                    @else
                                        <span class="badge bg-secondary">
                                            Draft
                                        </span>
                                    @endif


                                </td>



                                <td class="text-center">


                                    {{-- Generate PDF --}}

                                    <a href="{{ route('sertifikat.view', $sertifikat->id) }}" target="_blank"
                                        class="btn btn-sm btn-success">

                                        <i class="bi bi-award"></i>

                                        Lihat Sertifikat

                                    </a>

                                    {{-- Edit --}}

                                    <button class="btn btn-sm btn-warning" data-bs-toggle="modal"
                                        data-bs-target="#modalEdit{{ $sertifikat->id }}">

                                        <i class="bi bi-pencil"></i>

                                    </button>

                                    {{-- Delete --}}

                                    <form action="{{ route('sertifikat.destroy', $sertifikat->id) }}" method="POST"
                                        class="d-inline" onsubmit="return confirm('Hapus sertifikat ini?')">


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

                                    Belum ada data sertifikat

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


                <form action="{{ route('sertifikat.store') }}" method="POST" enctype="multipart/form-data">


                    @csrf


                    <div class="modal-header">

                        <h5 class="modal-title">
                            Tambah Sertifikat
                        </h5>


                        <button type="button" class="btn-close" data-bs-dismiss="modal">

                        </button>

                    </div>



                    <div class="modal-body">


                        <div class="row">


                            <div class="col-md-6 mb-3">


                                <label class="form-label">
                                    Peserta
                                </label>


                                <select name="peserta_id" class="form-select" required>


                                    <option value="">
                                        -- Pilih Peserta --
                                    </option>


                                    @foreach ($pesertas as $peserta)
                                        <option value="{{ $peserta->id }}">

                                            {{ $peserta->nama_lengkap }}

                                        </option>
                                    @endforeach


                                </select>


                            </div>




                            <div class="col-md-6 mb-3">


                                <label class="form-label">
                                    Program Pelatihan
                                </label>


                                <select name="program_pelatihan_id" class="form-select" required>


                                    <option value="">
                                        -- Pilih Program --
                                    </option>


                                    @foreach ($programPelatihans as $program)
                                        <option value="{{ $program->id }}">

                                            {{ $program->nama_program }}

                                        </option>
                                    @endforeach


                                </select>


                            </div>




                            <div class="col-md-6 mb-3">

                                <label class="form-label">
                                    Nomor Sertifikat
                                </label>


                                <input type="text" name="nomor_sertifikat" class="form-control" required>


                            </div>

                            <div class="col-md-6 mb-3">

                                <label class="form-label">Kota Terbit</label>

                                <input type="text" name="kota_terbit" class="form-control"
                                    value="{{ old('kota_terbit', isset($sertifikat) ? $sertifikat->kota_terbit : '') }}">

                            </div>


                            <div class="col-md-6 mb-3">

                                <label class="form-label">
                                    Tanggal Terbit
                                </label>


                                <input type="date" name="tanggal_terbit" class="form-control" required>


                            </div>




                            <div class="col-md-6 mb-3">

                                <label class="form-label">
                                    Upload PDF (Opsional)
                                </label>


                                <input type="file" name="file_pdf" class="form-control" accept="application/pdf">


                            </div>




                            <div class="col-md-6 mb-3">


                                <label class="form-label">
                                    Status
                                </label>


                                <select name="status" class="form-select">


                                    <option value="1">
                                        Terbit
                                    </option>


                                    <option value="0">
                                        Draft
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


    @foreach ($sertifikats as $sertifikat)
        <div class="modal fade" id="modalEdit{{ $sertifikat->id }}">


            <div class="modal-dialog modal-lg">


                <div class="modal-content">


                    <form action="{{ route('sertifikat.update', $sertifikat->id) }}" method="POST"
                        enctype="multipart/form-data">


                        @csrf

                        @method('PUT')



                        <div class="modal-header">

                            <h5 class="modal-title">
                                Edit Sertifikat
                            </h5>


                            <button type="button" class="btn-close" data-bs-dismiss="modal">

                            </button>

                        </div>



                        <div class="modal-body">


                            <div class="row">


                                <div class="col-md-6 mb-3">


                                    <label class="form-label">
                                        Peserta
                                    </label>


                                    <select name="peserta_id" class="form-select">


                                        @foreach ($pesertas as $peserta)
                                            <option value="{{ $peserta->id }}"
                                                {{ $sertifikat->peserta_id == $peserta->id ? 'selected' : '' }}>

                                                {{ $peserta->nama_lengkap }}

                                            </option>
                                        @endforeach


                                    </select>


                                </div>





                                <div class="col-md-6 mb-3">


                                    <label class="form-label">
                                        Program Pelatihan
                                    </label>


                                    <select name="program_pelatihan_id" class="form-select">


                                        @foreach ($programPelatihans as $program)
                                            <option value="{{ $program->id }}"
                                                {{ $sertifikat->program_pelatihan_id == $program->id ? 'selected' : '' }}>

                                                {{ $program->nama_program }}

                                            </option>
                                        @endforeach


                                    </select>


                                </div>




                                <div class="col-md-6 mb-3">


                                    <label class="form-label">
                                        Nomor Sertifikat
                                    </label>


                                    <input type="text" name="nomor_sertifikat" class="form-control"
                                        value="{{ $sertifikat->nomor_sertifikat }}">


                                </div>

                                <div class="col-md-6 mb-3">

                                    <label class="form-label">Kota Terbit</label>

                                    <input type="text" name="kota_terbit" class="form-control"
                                        value="{{ old('kota_terbit', isset($sertifikat) ? $sertifikat->kota_terbit : '') }}">

                                </div>


                                <div class="col-md-6 mb-3">


                                    <label class="form-label">
                                        Tanggal Terbit
                                    </label>


                                    <input type="date" name="tanggal_terbit" class="form-control"
                                        value="{{ $sertifikat->tanggal_terbit?->format('Y-m-d') }}">


                                </div>




                                <div class="col-md-6 mb-3">


                                    <label class="form-label">
                                        Ganti PDF
                                    </label>


                                    <input type="file" name="file_pdf" class="form-control" accept="application/pdf">


                                    @if ($sertifikat->file_pdf)
                                        <small>
                                            File:

                                            <a href="{{ asset('storage/' . $sertifikat->file_pdf) }}" target="_blank">

                                                Lihat PDF

                                            </a>

                                        </small>
                                    @endif


                                </div>




                                <div class="col-md-6 mb-3">


                                    <label class="form-label">
                                        Status
                                    </label>


                                    <select name="status" class="form-select">


                                        <option value="1" {{ $sertifikat->status ? 'selected' : '' }}>

                                            Terbit

                                        </option>


                                        <option value="0" {{ !$sertifikat->status ? 'selected' : '' }}>

                                            Draft

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
