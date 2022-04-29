<!DOCTYPE html>
<html lang="en">

<!-- index-0.html  Tue, 07 Jan 2020 03:35:33 GMT -->

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>@yield('title', 'Analytics &mdash; CodiePie')</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{ asset('dashboard/assets/modules/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard/assets/vendor/font-awesome/css/all.css') }}">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('dashboard/assets/modules/jqvmap/dist/jqvmap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard/assets/modules/weather-icon/css/weather-icons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard/assets/modules/weather-icon/css/weather-icons-wind.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard/assets/modules/summernote/summernote-bs4.css') }}">

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('dashboard/assets/css/style.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard/assets/css/components.min.css') }}">

    @yield('theme')
</head>

<body class="layout-4">

    @yield('auth-content')

    @auth
        <!-- Page Loader -->
        {{-- <div class="page-loader-wrapper">
            <span class="loader"><span class="loader-inner"></span></span>
        </div> --}}

        <div id="app">
            <div class="main-wrapper main-wrapper-1">
                <div class="navbar-bg"></div>

                <!-- Start app top navbar -->
                @include('layouts.body.navbar')

                <!-- Start main left sidebar menu -->
                @include('layouts.body.sidebar')

                <!-- Start app main Content -->
                @yield('content')

                <!-- Start app Footer part -->
                @include('layouts.body.footer')
            </div>
        </div>
    @endauth

    <!-- General JS Scripts -->
    <script src="{{ asset('dashboard/assets/bundles/lib.vendor.bundle.js') }}"></script>
    <script src="{{ asset('dashboard/js/CodiePie.js') }}"></script>

    <!-- JS Libraies -->
    <script src="{{ asset('dashboard/assets/modules/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('dashboard/assets/modules/simple-weather/jquery.simpleWeather.min.js') }}"></script>
    <script src="{{ asset('dashboard/assets/modules/jqvmap/dist/jquery.vmap.min.js') }}"></script>
    <script src="{{ asset('dashboard/assets/modules/jqvmap/dist/maps/jquery.vmap.world.js') }}"></script>
    <script src="{{ asset('dashboard/assets/modules/summernote/summernote-bs4.js') }}"></script>
    <script src="{{ asset('dashboard/assets/modules/chocolat/dist/js/jquery.chocolat.min.js') }}"></script>

    <!-- Page Specific JS File -->
    <script src="{{ asset('dashboard/js/page/index-0.js') }}"></script>

    <!-- Template JS File -->
    <script src="{{ asset('dashboard/js/scripts.js') }}"></script>
    <script src="{{ asset('dashboard/js/custom.js') }}"></script>

    @yield('scripts')
</body>

<!-- index-0.html  Tue, 07 Jan 2020 03:35:42 GMT -->

</html>
