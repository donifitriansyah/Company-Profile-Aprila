@extends('layouts.backend')

@section('title', 'Detail Program Pelatihan')

@section('content')

    <div class="card shadow-sm border-0">

        <div class="card-header bg-white d-flex justify-content-between align-items-center">

            <div>
                <h5 class="fw-bold mb-1">
                    <i class="bi bi-journal-text me-2"></i>
                    Detail Program Pelatihan
                </h5>

                <small class="text-muted">
                    {{ $program->nama_program }}
                </small>
            </div>


            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalTambah">

                <i class="bi bi-plus-circle me-1"></i>
                Tambah Materi

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

                            <th width="70">
                                No
                            </th>

                            <th width="100">
                                Urutan
                            </th>

                            <th>
                                Nama Unit / Materi
                            </th>

                            <th width="150">
                                Jumlah JP
                            </th>

                            <th width="120">
                                Aksi
                            </th>

                        </tr>

                    </thead>



                    <tbody>


                        @forelse($details as $detail)
                            <tr>


                                <td>
                                    {{ $loop->iteration }}
                                </td>


                                <td class="text-center">

                                    <span class="badge bg-primary">
                                        {{ $detail->urutan }}
                                    </span>

                                </td>


                                <td>
                                    {{ $detail->nama_unit }}
                                </td>


                                <td>
                                    {{ $detail->jumlah_jp }} JP
                                </td>



                                <td class="text-center">


                                    <button class="btn btn-sm btn-warning" data-bs-toggle="modal"
                                        data-bs-target="#modalEdit{{ $detail->id }}">

                                        <i class="bi bi-pencil"></i>

                                    </button>




                                    <form action="{{ route('program-detail.destroy', $detail->id) }}" method="POST"
                                        class="d-inline" onsubmit="return confirm('Hapus detail ini?')">


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

                                <td colspan="5" class="text-center">

                                    Belum ada detail program

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


        <div class="modal-dialog">


            <div class="modal-content">



                <form action="{{ route('program-detail.store') }}" method="POST">


                    @csrf


                    <input type="hidden" name="program_pelatihan_id" value="{{ $program->id }}">



                    <div class="modal-header">


                        <h5 class="modal-title">
                            Tambah Detail Program
                        </h5>


                        <button type="button" class="btn-close" data-bs-dismiss="modal">
                        </button>


                    </div>



                    <div class="modal-body">


                        <div class="mb-3">


                            <label class="form-label">
                                Urutan
                            </label>


                            <input type="number" name="urutan" class="form-control" value="{{ $details->count() + 1 }}"
                                required>


                        </div>




                        <div class="mb-3">


                            <label class="form-label">
                                Nama Unit / Materi
                            </label>


                            <input type="text" name="nama_unit" class="form-control" required>


                        </div>




                        <div class="mb-3">


                            <label class="form-label">
                                Jumlah JP
                            </label>


                            <input type="number" name="jumlah_jp" class="form-control" required>


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


    @foreach ($details as $detail)
        <div class="modal fade" id="modalEdit{{ $detail->id }}">


            <div class="modal-dialog">


                <div class="modal-content">


                    <form action="{{ route('program-detail.update', $detail->id) }}" method="POST">


                        @csrf
                        @method('PUT')



                        <div class="modal-header">


                            <h5 class="modal-title">
                                Edit Detail Program
                            </h5>


                            <button type="button" class="btn-close" data-bs-dismiss="modal">
                            </button>


                        </div>




                        <div class="modal-body">


                            <div class="mb-3">


                                <label class="form-label">
                                    Urutan
                                </label>


                                <input type="number" name="urutan" class="form-control" value="{{ $detail->urutan }}"
                                    required>


                            </div>




                            <div class="mb-3">


                                <label class="form-label">
                                    Nama Unit / Materi
                                </label>


                                <input type="text" name="nama_unit" class="form-control"
                                    value="{{ $detail->nama_unit }}" required>


                            </div>




                            <div class="mb-3">


                                <label class="form-label">
                                    Jumlah JP
                                </label>


                                <input type="number" name="jumlah_jp" class="form-control"
                                    value="{{ $detail->jumlah_jp }}" required>


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
