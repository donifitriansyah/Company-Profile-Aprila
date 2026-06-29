<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @include('includes.backend.style')
</head>

<body>
    <div id="app">
        @include('includes.backend.sidebar')
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

            @yield('content')


        </div>


    </div>
    @include('includes.backend.footer')
    @include('includes.backend.script')
</body>

</html>
