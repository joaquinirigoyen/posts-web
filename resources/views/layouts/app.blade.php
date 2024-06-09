<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <!-- Styles -->
        <script src="https://cdn.tailwindcss.com"></script>
        <style>
          .bg-pattern {
              background: linear-gradient(rgba(255, 255, 255, 0.5), rgba(255, 255, 255, 0.5)), url('https://www.creative-tim.com/learning-lab/tailwind-starter-kit/img/ill_header_3.png') no-repeat center center ;
              background-size: cover;
              
          }
  
          .custom-top {
              top: 320px;
              /* Ajusta este valor según lo necesites */
          }
      </style>
    </head>
    <body class="font-sans bg-pattern" >
        <div class="min-h-screen">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @isset($header)
                <header class="bg-white dark:bg-gray-800 shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endisset

            <!-- Page Content -->
            <div>
              {{ $slot }}
            </div>
        </div>
    </body>
</html>
