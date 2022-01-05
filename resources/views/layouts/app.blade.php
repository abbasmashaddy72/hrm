<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" />
    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
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
            @include('layouts.footer')
        </main>
    </div>

    <script src="{{ asset('js/theme/libs.min.js') }}"></script>
    <script src="{{ asset('js/theme/external.min.js') }}"></script>
    <script src="{{ mix('js/hope-ui.js') }}"></script>
    <script src="{{ mix('js/app.js') }}"></script>
</body>

</html>
