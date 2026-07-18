<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="@yield('meta_description', 'Yayasan Aprila Indonesia merupakan lembaga yang bergerak di bidang pendidikan, pelatihan, sertifikasi, pengembangan SDM, bisnis, dan teknologi.')">

    <meta name="keywords" content="@yield('meta_keywords', 'Aprila Indonesia, Yayasan Aprila Indonesia, Pelatihan, Sertifikasi, Pendidikan, Bimbingan Belajar, LPK Aprila')">
    <meta property="og:type" content="article">
    <meta property="og:site_name" content="Aprila Indonesia">
    <meta property="og:title" content="@yield('og_title', 'Aprila Indonesia')">
    <meta property="og:description" content="@yield('og_description', 'Aprila Indonesia')">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="@yield('og_image', asset('frontend/assets/img/logo-aprila.jpg'))">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="@yield('og_title', 'Aprila Indonesia')">
    <meta name="twitter:description" content="@yield('og_description', 'Aprila Indonesia')">
    <meta name="twitter:image" content="@yield('og_image', asset('frontend/assets/img/logo-aprila.jpg'))">
    <title>@yield('title')</title>
    @include('includes.frontend.style')
</head>

<body data-spy="scroll" data-offset="80">

    @include('includes.frontend.navbar')
    @yield('content')
    @include('includes.frontend.footer')

    @include('includes.frontend.script')
</body>
@stack('scripts')
@if (session('success'))
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Terima Kasih!',
            html: `
                <p>Terima kasih telah memberikan komentar.</p>
                <p>Komentar Anda telah berhasil dikirim dan sedang menunggu <strong>validasi dari admin</strong> sebelum ditampilkan.</p>
            `,
            confirmButtonText: 'Baik',
            confirmButtonColor: '#3085d6'
        });
    </script>
@endif

</html>
