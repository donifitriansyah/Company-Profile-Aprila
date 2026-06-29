<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="Eduleb - Education HTML Template">
    <meta name="keywords"
        content="agency, business, corporate, creative, html5, modern, multipurpose, One Page, parallax, startup">
    <title>@yield('title')</title>
    @include('includes.frontend.style')
</head>

<body data-spy="scroll" data-offset="80">

    @include('includes.frontend.navbar')
    @yield('content')
    @include('includes.frontend.footer')

    @include('includes.frontend.script')
</body>

</html>
