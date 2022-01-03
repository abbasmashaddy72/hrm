<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="../assets/images/favicon.ico" />
    <link rel="stylesheet" href="../assets/vendor/swiper-slider/swiper-bundle.min.css" />
    <link rel="stylesheet" href="../assets/css/libs.min.css">
    <link rel="stylesheet" href="../assets/css/style.css?v=1.2.1">
    <link rel="stylesheet" href="../assets/vendor/Leaflet/leaflet.css">
</head>

<body class="overflow-x-hidden bg-body dark:bg-dark-bg">
    @include('partials.loader')

    <div>
        @include('layouts.sidebar')
        <main class="main-content " x-data="{ data: true }">
            <div class="relative">
                @include('layouts.navbar')
            </div>
            <div class="p-6 py-0 mt-4 lg:p-10 lg:py-0 container-fluid">
                {{ $slot }}
            </div>
            @include('layouts.setting')
            @include('layouts.footer')
        </main>
    </div>

    <!-- Library Bundle Script -->
    <script src="../assets/js/core/libs.min.js"></script>
    <!-- External Library Bundle Script -->
    <script src="../assets/js/core/external.min.js"></script>
    <!-- mapchart Script -->
    <script src="../assets/js/charts/vectore-chart.js"></script>
    <!-- fslightbox Script -->
    <script src="../assets/js/plugins/fslightbox.js"></script>
    <!-- App Script -->
    <script src="../assets/js/hope-ui.js"></script>
    <!-- Alpine Js-->
    <script src="../assets/js/plugins/alpine.js"></script>
    <!-- Dashboard Chart & Slider -->
    <script src="../assets/js/charts/dashboard.js" defer></script>
    <!-- Widgetchart Script -->
    <script src="../assets/js/charts/widgetcharts.js"></script>
    <!-- leaflet JavaScript file -->
    <script src="../assets/vendor/Leaflet/leaflet.js"></script>
</body>

</html>
