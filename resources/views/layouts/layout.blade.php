<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Investment platform, Ruya studio">
    <meta name="author" content="HADJ RAMDANE SAID, IT & Business, FUll STACK DEVELOPER">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!--===============================================================================================-->
    <title>{{ 'Investment Platform' }}</title>
    <!--===============================================================================================-->
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <!--===============================================================================================-->
    <!--===============================================================================================-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Chivo:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
    <!--===============================================================================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicons/favicon-16x16.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicons/favicon.ico">
    <link rel="manifest" href="assets/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="assets/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">
    <!--===============================================================================================-->
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
    <!--===============================================================================================-->
    <!-- Icons -->
    <link href="{{ asset('argon/vendor/nucleo/css/nucleo.css') }}" rel="stylesheet">
    <link href="{{ asset('argon/vendor/@fortawesome/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <!--===============================================================================================-->


    <link href="{{asset('assets/css/theme.css')}}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <!-- Styles -->
    @livewireStyles
    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
</head>
<body class="font-sans antialiased">
<x-jet-banner />
<div class="min-h-screen bg-white">
    <!-- Page Heading -->
    @if (isset($header))
        <header class="bg-white shadow">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                {{ $header }}
            </div>
        </header>
@endif

<!-- Page Content -->
    <main>
        @include('includes.header')
        @yield('content')
        @include('includes.footer')
    </main>

</div>

@stack('modals')

@livewireScripts
<script src="{{asset('vendors/@popperjs/popper.min.js')}}"></script>
<script src="{{asset('vendors/bootstrap/bootstrap.min.js')}}"></script>

<script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
<script src="{{asset('assets/js/theme.js')}}"></script>

</body>

</html>
