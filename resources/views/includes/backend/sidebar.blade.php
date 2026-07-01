<div id="sidebar" class="active">
    <div class="sidebar-wrapper active">
        <div class="sidebar-header">
            <div class="d-flex justify-content-between">
                <div class="logo">
                    <a><img src="{{ asset('frontend/assets/img/logo-aprila1.png') }}" alt="Logo" srcset=""></a>
                </div>
                <div class="toggler">
                    <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                </div>
            </div>
        </div>
        <div class="sidebar-menu">
            <ul class="menu">
                <li class="sidebar-title">Menu</li>

                <li class="sidebar-item {{ request()->routeIs('dashboard') ? 'active' : '' }}">
                    <a href="{{ route('dashboard') }}" class='sidebar-link'>
                        <i class="bi bi-grid-fill"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li
                    class="sidebar-item has-sub
                        {{ request()->routeIs('admin-kategori-berita.*', 'admin-berita.*', 'admin-komentar-berita.*') ? 'active' : '' }}">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-stack"></i>
                        <span>Berita</span>
                    </a>
                    <ul class="submenu ">
                        <li
                            class="submenu-item {{ request()->routeIs('admin-kategori-berita.index') ? 'active' : '' }}">
                            <a href="{{ route('admin-kategori-berita.index') }}">Kategori Berita</a>
                        </li>
                        <li class="submenu-item {{ request()->routeIs('admin-berita.index') ? 'active' : '' }}">
                            <a href="{{ route('admin-berita.index') }}">Berita</a>
                        </li>
                        <li
                            class="submenu-item {{ request()->routeIs('admin-komentar-berita.index') ? 'active' : '' }}">
                            <a href="{{ route('admin-komentar-berita.index') }}">Validasi Komentar</a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item {{ request()->routeIs('admin-course.index') ? 'active' : '' }}">
                    <a href="{{ route('admin-course.index') }}" class='sidebar-link'>
                        <i class="bi bi-grid-fill"></i>
                        <span>Kursus</span>
                    </a>
                </li>
                <li class="sidebar-item {{ request()->routeIs('admin-instructor.index') ? 'active' : '' }}">
                    <a href="{{ route('admin-instructor.index') }}" class='sidebar-link'>
                        <i class="bi bi-grid-fill"></i>
                        <span>Instruktur</span>
                    </a>
                </li>
                <li class="sidebar-item {{ request()->routeIs('award.index') ? 'active' : '' }}">
                    <a href="{{ route('award.index') }}" class='sidebar-link'>
                        <i class="bi bi-grid-fill"></i>
                        <span>Prestasi</span>
                    </a>
                </li>


                <li class="sidebar-item">
                    <form id="logout-form" action="{{ route('logout') }}" method="POST">
                        @csrf

                        <a href="#" class="sidebar-link text-danger btn-logout">
                            <i class="bi bi-box-arrow-right"></i>
                            <span>Logout</span>
                        </a>
                    </form>
                </li>

            </ul>
        </div>
        <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
    </div>
</div>
<script>
    $(document).on('click', '.btn-logout', function(e) {

        e.preventDefault();

        Swal.fire({
            title: 'Logout?',
            text: 'Anda yakin ingin keluar dari sistem?',
            icon: 'question',
            showCancelButton: true,
            confirmButtonColor: '#dc3545',
            cancelButtonColor: '#6c757d',
            confirmButtonText: 'Ya, Logout',
            cancelButtonText: 'Batal'
        }).then((result) => {

            if (result.isConfirmed) {
                $('#logout-form').submit();
            }

        });

    });
</script>
