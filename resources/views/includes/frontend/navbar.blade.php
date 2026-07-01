<div id="navigation" class="navbar-light bg-faded site-navigation">
    <div class="container-fluid">
        <div class="row align-items-center">

            <!-- Logo -->
            <div class="col-auto">
                <div class="site-logo">
                    <a href="index.html">
                        <img src="{{ asset('frontend/assets/img/logo-aprila.png') }}" alt="Aprila Indonesia">
                    </a>
                </div>
            </div>

            <!-- Main Menu - Desktop -->
            <div class="col d-none d-xl-block">
                <nav id="main-menu" class="ms-auto">
                    <ul class="d-flex justify-content-end align-items-center gap-4 mb-0">
                        <li class="menu-item"><a href="{{ route('welcome') }}">Beranda</a></li>
                        <li><a href="{{ route('tentang-kami') }}">Tentang Kami</a></li>
                        <li class="menu-item-has-children">
                            <a>Layanan</a>
                            <ul>
                                <li><a href="{{ route('pkbm-aprila') }}">PKBM</a></li>
                                <li><a href="https://klinikbisnis.aprila.id/">Klinik Bisnis</a></li>
                                {{-- <li><a href="course_details.html">Production House</a></li> --}}
                                <li><a href="{{ route('kelas-kursus-dan-jasa') }}">Kelas Kursus dan Jasa</a></li>
                            </ul>
                        </li>

                        
                        <li><a href="{{ route('berita') }}">Berita</a></li>
                        <li><a href="{{ route('kontak-kami') }}">Kontak</a></li>
                        <li><a href="https://lms.aprila.id/login/index.php">LMS</a></li>
                    </ul>
                </nav>
            </div>

            <!-- Mobile Menu -->
            <ul class="mobile_menu d-xl-none">
                <li><a href="{{ route('welcome') }}">Beranda</a></li>
                <li><a href="{{ route('tentang-kami') }}">Tentang Kami</a></li>
                <li><a href="#">Layanan</a>
                    <ul class="sub-menu">
                        <li><a href="{{ route('pkbm-aprila') }}">PKBM</a></li>
                        <li><a href="https://klinikbisnis.aprila.id/">Klinik Bisnis</a></li>
                        <li><a href="{{ route('kelas-kursus-dan-jasa') }}">Kelas Kursus dan Jasa</a></li>
                    </ul>
                </li>

                <li><a href="{{ route('berita') }}">Berita</a></li>
                <li><a href="{{ route('kontak-kami') }}">Kontak</a></li>
                <li><a href="https://lms.aprila.id/login/index.php">LMS</a></li>
            </ul>

        </div>
    </div>
</div>
