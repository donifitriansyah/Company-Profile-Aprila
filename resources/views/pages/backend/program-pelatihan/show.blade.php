@extends('layouts.backend')

@section('title', 'Detail Program Pelatihan')

@section('content')

<div class="card shadow-sm border-0">

    <div class="card-header bg-white">

        <h5 class="fw-bold mb-0">
            <i class="bi bi-mortarboard-fill me-2"></i>
            Detail Program Pelatihan
        </h5>

    </div>


    <div class="card-body">


        <table class="table table-bordered">

            <tr>
                <th width="200">
                    Nama Program
                </th>

                <td>
                    {{ $programPelatihan->nama_program }}
                </td>
            </tr>


            <tr>

                <th>
                    Durasi
                </th>

                <td>
                    {{ $programPelatihan->durasi_jp }} JP
                </td>

            </tr>


            <tr>

                <th>
                    Periode
                </th>

                <td>

                    {{ $programPelatihan->tanggal_mulai?->format('d-m-Y') }}

                    s/d

                    {{ $programPelatihan->tanggal_selesai?->format('d-m-Y') }}

                </td>

            </tr>


            <tr>

                <th>
                    Status
                </th>

                <td>

                    @if($programPelatihan->status)

                        <span class="badge bg-success">
                            Aktif
                        </span>

                    @else

                        <span class="badge bg-secondary">
                            Tidak Aktif
                        </span>

                    @endif

                </td>

            </tr>


            <tr>

                <th>
                    Deskripsi
                </th>

                <td>
                    {{ $programPelatihan->deskripsi ?? '-' }}
                </td>

            </tr>


        </table>



        <hr>


        <div class="d-flex justify-content-between align-items-center mb-3">

            <h5 class="fw-bold">
                Materi Pelatihan
            </h5>


            <a href="{{ route('program-detail.index',$programPelatihan->id) }}"
               class="btn btn-primary btn-sm">

                <i class="bi bi-list-ul"></i>
                Kelola Detail

            </a>

        </div>



        <div class="table-responsive">

            <table class="table table-bordered">

                <thead class="table-light">

                    <tr>

                        <th width="80">
                            No
                        </th>

                        <th>
                            Unit Materi
                        </th>

                        <th width="120">
                            JP
                        </th>

                    </tr>

                </thead>


                <tbody>


                @forelse($programPelatihan->details as $detail)

                    <tr>

                        <td>
                            {{ $loop->iteration }}
                        </td>

                        <td>
                            {{ $detail->nama_unit }}
                        </td>

                        <td>
                            {{ $detail->jumlah_jp }} JP
                        </td>

                    </tr>


                @empty

                    <tr>

                        <td colspan="3" class="text-center">

                            Belum ada materi

                        </td>

                    </tr>

                @endforelse


                </tbody>


            </table>


        </div>


    </div>

</div>

@endsection
