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
                                {{-- <li><a href="course.html">Lembaga Kursus dan Pelatihan</a></li>
                                <li><a href="course.html">Lembaga Pelatihan Kerja</a></li> --}}
                                <li><a href="https://klinikbisnis.aprila.id/">Klinik Bisnis</a></li>
                                {{-- <li><a href="course_details.html">Production House</a></li> --}}
                                <li><a href="{{ route('kelas-kursus-dan-jasa') }}">Kelas Kursus dan Jasa</a></li>
                            </ul>
                        </li>

                        <li class="menu-item-has-children">
                            <a>Berita</a>
                            <ul>
                                <li><a href="{{ route('berita') }}">Berita</a></li>
                                <li><a href="blog_single.html">Galeri</a></li>
                            </ul>
                        </li>
                        <li><a href="{{ route('kontak-kami') }}">Kontak</a></li>
                        <li><a href="https://lms.aprila.id/login/index.php">LMS</a></li>
                    </ul>
                </nav>
            </div>

            <!-- Mobile Menu -->
            <ul class="mobile_menu d-xl-none">
                <li><a href="#">Home</a>
                    <ul class="sub-menu">
                        <li><a href="index.html">Home 01</a></li>
                        <li><a href="index2.html">Home 02</a></li>
                    </ul>
                </li>
                <li><a href="about.html">About</a></li>
                <li><a href="#">Course</a>
                    <ul class="sub-menu">
                        <li><a href="course.html">Course</a></li>
                        <li><a href="course_details.html">Course Details</a></li>
                    </ul>
                </li>
                <li><a href="#">Pages</a>
                    <ul class="sub-menu">
                        <li><a href="instructor.html">Instructor</a></li>
                        <li><a href="ins_details.html">Instructor Details</a></li>
                        <li><a href="pricing.html">Pricing Plan</a></li>
                        <li><a href="faq.html">Faq Page</a></li>
                        <li><a href="404.html">404</a></li>
                    </ul>
                </li>
                <li><a href="blog.html">Berita</a>
                    <ul class="sub-menu">
                        <li><a href="blog.html">Blog</a></li>
                        <li><a href="blog_single.html">Blog Details</a></li>
                    </ul>
                </li>
                <li><a href="contact.html">Contact</a></li>
            </ul>

        </div>
    </div>
</div>
