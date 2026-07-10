@extends('layouts.backend')

@section('title', 'Dashboard')

@section('content')
    <div class="page-heading mb-4">

        <div class="d-flex justify-content-between align-items-center flex-wrap">

            <div>
                <h2 class="fw-bold mb-2">Dashboard Yayasan Aprila</h2>
                <p class="text-muted mb-0">
                    Selamat datang kembali,
                    <strong>{{ Auth::user()->name }}</strong>.
                    Berikut ringkasan data website Yayasan Aprila.
                </p>
            </div>

            <div class="text-end mt-3 mt-lg-0">
                <span class="badge bg-primary fs-6 px-3 py-2">
                    <i class="bi bi-calendar-event me-1"></i>
                    {{ now()->translatedFormat('l, d F Y') }}
                </span>
            </div>

        </div>

    </div>


    <div class="row">

        {{-- Testimoni --}}
        <div class="col-xl-3 col-lg-6 col-md-6 mb-4">
            <div class="dashboard-card purple">

                <div class="dashboard-card-body">

                    <div>

                        <small>Total Testimoni</small>

                        <h2>{{ number_format($testimonialCount) }}</h2>

                        <span>Total Data</span>

                    </div>

                    <div class="dashboard-icon">
                        <i class="bi bi-chat-left-quote-fill"></i>
                    </div>

                </div>

            </div>
        </div>

        {{-- Instruktur --}}
        <div class="col-xl-3 col-lg-6 col-md-6 mb-4">
            <div class="dashboard-card blue">

                <div class="dashboard-card-body">

                    <div>

                        <small>Total Instruktur</small>

                        <h2>{{ number_format($instructorCount) }}</h2>

                        <span>Instruktur Aktif</span>

                    </div>

                    <div class="dashboard-icon">
                        <i class="bi bi-person"></i>
                    </div>

                </div>

            </div>
        </div>

        {{-- Klien --}}
        <div class="col-xl-3 col-lg-6 col-md-6 mb-4">
            <div class="dashboard-card green">

                <div class="dashboard-card-body">

                    <div>

                        <small>Total Klien</small>

                        <h2>{{ number_format($clientCount) }}</h2>

                        <span>Mitra & Klien</span>

                    </div>

                    <div class="dashboard-icon">
                        <i class="bi bi-people-fill"></i>
                    </div>

                </div>

            </div>
        </div>

        {{-- Berita --}}
        <div class="col-xl-3 col-lg-6 col-md-6 mb-4">
            <div class="dashboard-card orange">

                <div class="dashboard-card-body">

                    <div>

                        <small>Total Berita</small>

                        <h2>{{ number_format($beritaCount) }}</h2>

                        <span>Berita Aktif</span>

                    </div>

                    <div class="dashboard-icon">
                        <i class="bi bi-newspaper"></i>
                    </div>

                </div>

            </div>
        </div>

    </div>


    {{-- Welcome Card --}}
    <div class="row">

        <div class="col-12">

            <div class="card border-0 shadow-sm">

                <div class="card-body p-5">

                    <div class="row align-items-center">

                        <div class="col-lg-8">

                            <h3 class="fw-bold mb-3">
                                Selamat Datang di Dashboard Yayasan Aprila 👋
                            </h3>

                            <p class="text-muted mb-0">
                                Dashboard ini digunakan untuk mengelola seluruh
                                informasi website Yayasan Aprila, mulai dari data
                                berita, instruktur, klien, testimoni, hingga konten
                                lainnya.
                            </p>

                        </div>

                        <div class="col-lg-4 text-center mt-4 mt-lg-0">

                            <i class="bi bi-speedometer2 dashboard-big-icon"></i>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>


    <style>
        .dashboard-card {
            border-radius: 20px;
            color: #fff;
            overflow: hidden;
            transition: .35s;
            box-shadow: 0 10px 30px rgba(0, 0, 0, .12);
        }

        .dashboard-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 18px 45px rgba(0, 0, 0, .18);
        }

        .dashboard-card-body {
            padding: 28px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .dashboard-card h2 {
            font-size: 38px;
            font-weight: 700;
            margin: 12px 0;
            color: #fff;
        }

        .dashboard-card small {
            font-size: 14px;
            opacity: .9;
        }

        .dashboard-card span {
            display: inline-block;
            background: rgba(255, 255, 255, .18);
            padding: 6px 12px;
            border-radius: 30px;
            font-size: 13px;
        }

        .dashboard-icon {
            width: 72px;
            height: 72px;
            border-radius: 50%;
            background: rgba(255, 255, 255, .18);

            display: flex;
            align-items: center;
            justify-content: center;

            flex-shrink: 0;
        }

        .dashboard-icon i {
            display: flex;
            align-items: center;
            justify-content: center;

            width: 32px;
            height: 32px;

            font-size: 30px;
            line-height: 1;
        }

        .purple {
            background: linear-gradient(135deg, #6C63FF, #8B5CF6);
        }

        .blue {
            background: linear-gradient(135deg, #2563EB, #3B82F6);
        }

        .green {
            background: linear-gradient(135deg, #16A34A, #22C55E);
        }

        .orange {
            background: linear-gradient(135deg, #F97316, #FB923C);
        }

        .dashboard-big-icon {
            font-size: 120px;
            color: #4f46e5;
            opacity: .15;
        }

        @media(max-width:768px) {

            .dashboard-card-body {
                padding: 22px;
            }

            .dashboard-card h2 {
                font-size: 30px;
            }

            .dashboard-icon {
                width: 60px;
                height: 60px;
            }

            .dashboard-icon i {
                font-size: 26px;
            }

            .dashboard-big-icon {
                font-size: 90px;
            }

        }
    </style>



@endsection
