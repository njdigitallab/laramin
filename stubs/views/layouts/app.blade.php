<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="robots" content="noindex">

        <!-- Route Info -->
        <meta name="route-uri" content="{{ url()->current() }}">
        <meta name="route-relative-uri" content="{{ Route::current()->uri }}">
        <meta name="route-name" content="{{ Route::currentRouteName() }}">

        <!-- Custom Header Meta Info -->
        @yield('header-meta')

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Title -->
        @hasSection('title')
            <title>@yield('title') | {{ config('app.name', 'Laravel') }}</title>
        @else
            <title>{{ config('app.name', 'Laravel') }}</title>
        @endif

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Stylesheets -->
        @section('stylesheets')
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @show

        <!-- Custom CSS -->
        <style type="text/css">
            @yield('custom-css')
        </style>

        <!-- Custom JS -->
        <script type="text/javascript">
            @yield('header-js')
        </script>

        <!-- Scripts -->
        @yield('header-scripts')
    </head>
    <body class="antialiased text-gray-500">
        <div id="app" class="min-h-screen flex flex-col bg-slate-200">
            @include('layouts.app.header')
            @include('layouts.app.sidebar')
            @include('layouts.app.main')
            @include('layouts.app.footer')
        </div>

        <!-- Custom JS -->
        <script type="text/javascript">
            @yield('footer-js')
        </script>

        <!-- Scripts -->
        @section('footer-scripts')
            <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/js/all.min.js" integrity="sha512-6BTOlkauINO65nLhXhthZMtepgJSghyimIalb+crKRPhvhmsCdnIuGcVbR5/aQY2A+260iC1OPy1oCdB6pSSwQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        
            @vite(['resources/js/components/menu.js'])
        @show
    </body>
</html>
