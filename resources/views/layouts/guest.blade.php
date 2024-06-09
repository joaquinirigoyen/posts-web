<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="https://www.creative-tim.com/learning-lab/tailwind-starter-kit/img/favicon.ico">
    <link rel="apple-touch-icon" sizes="76x76" href="https://www.creative-tim.com/learning-lab/tailwind-starter-kit/img/apple-icon.png">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <style>
      .bg-pattern {
              background: linear-gradient(rgba(255, 255, 255, 0.5), rgba(255, 255, 255, 0.5)), url('https://www.creative-tim.com/learning-lab/tailwind-starter-kit/img/ill_header_3.png') no-repeat center center ;
              background-size: cover;
              
          }
          .custom-shadow {
            box-shadow: 0 25px 50px rgba(59, 130, 246, 0.5); /* Azul con mayor sombra */
        }
        /* .bg-pattern {
            background: url('https://www.creative-tim.com/learning-lab/tailwind-starter-kit/img/register_bg_2.png') no-repeat center center;
            background-size: cover;
        } */

        /* .bg-color {
            background-color: rgba(30, 41, 59);
        } */
    </style>
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans text-gray-900 antialiased">
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-color bg-pattern">
        <nav class="top-0 absolute z-50 w-full flex flex-wrap items-center justify-between px-2 py-3">
            <div class="container px-4 mx-auto flex flex-wrap items-center justify-between">
                <div class="w-full relative flex justify-between lg:w-auto lg:static lg:block lg:justify-start"><a
                        class="text-white text-sm font-bold leading-relaxed inline-block mr-4 py-2 whitespace-nowrap uppercase"
                        href="/">Post</a><button
                        class="cursor-pointer text-xl leading-none px-3 py-1 border border-solid border-transparent rounded bg-transparent block lg:hidden outline-none focus:outline-none"
                        type="button"><i class="text-white fas fa-bars"></i></button></div>
                
            </div>
        </nav>
        <div>
            <a href="/">
              <img src="{{ asset('storage/app/public/img/logo.png') }}" alt="logo" border="0" width="50" height="50">
            </a>
        </div>

        <div
            class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white dark:bg-gray-700 shadow-md overflow-hidden sm:rounded-lg">
            {{ $slot }}
        </div>
    </div>
</body>

</html>
