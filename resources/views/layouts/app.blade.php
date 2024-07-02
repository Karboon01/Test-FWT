<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>
        <link rel="icon" href="{{ asset('/images/MainLogo.svg') }}">
        <script src="https://cdn.tailwindcss.com"></script>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <style>
            
        </style>
    </head>
    <body class="font-sans antialiased text-white">
        <div class="min-h-screen bg-neutral-900">
            @include('layouts.navigation')

            <main class="px-[20%] py-[5%] flex flex-row items-center justify-center gap-10">
                @yield('content')
            </main>
        </div>
    </body>
</html>
