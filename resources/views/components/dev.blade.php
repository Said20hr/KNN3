<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="description" content="Ruya Dev" />
    <meta name="author" content="" />
    <link rel="icon" type="image/png" sizes="16x16" href="assets/imgs/logos/fav-2.svg" />

    <title>{{ 'Ruya Dev' }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
    <!-- Vendor CSS -->

    <link rel="stylesheet" href="https://cdn.lineicons.com/3.0/lineicons.css">
    <link rel="stylesheet" href="{{asset('assets/css/animate.min.css?v=2.0')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/slick.css?v=2.0')}}" />
    <!-- Template CSS -->
    <link rel="stylesheet" href="{{mix('css/app.css')}}" />
    <!-- Styles -->
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    @livewireStyles

</head>
<body>
@include('dev.includes.dev-header')
<div class="font-sans text-gray-900 antialiased">
    {{ $slot }}
</div>
@include('dev.includes.dev-footer')
@stack('modals')

@livewireScripts


<script src="assets/js/vendor/modernizr-3.6.0.min.js"></script>
<script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
<script src="assets/js/vendor/waypoints.js"></script>
<script src="assets/js/vendor/counterup.js"></script>
<script src="assets/js/vendor/slick.js"></script>
<script src="assets/js/vendor/wow.js"></script>
<script src="assets/js/vendor/scrollup.js"></script>
<script src="assets/js/vendor/smooth.js"></script>
<script src="assets/js/vendor/textType.js"></script>
<script src="assets/js/vendor/mobile-menu.js"></script>
<script src="assets/js/main.js?v=2.0"></script>
<script href="{{mix('js/app.js')}}"></script>
</body>
</html>
