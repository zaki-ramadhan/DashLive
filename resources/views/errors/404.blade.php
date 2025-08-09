<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? 'Page Title' }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700,800,900" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/notyf@3/notyf.min.css">


        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <link rel="icon" type="image/png" href="{{ asset('img/dashlive-logo.svg') }}">
    </head>

    <body class="bg-[#FDFDFC] bg-[url('https://pagedone.io/asset/uploads/1691055810.png')] bg-center bg-cover min-h-screen grid place-content-center">
        <a href="/" wire:navigate class="fixed top-3 left-8 z-10">
            <img src="/img/dashlive-logo.svg" class="h-14" alt="DashLive Logo" title="DashLive">
        </a>

        <div class="overlay absolute top-0 left-0 right-0 bottom-0 bg-white/40"></div>
        
        <main class="container mx-auto flex flex-col justify-content-center items-center z-10">
            <img src="{{ asset('img/error-image.svg') }}" alt="error image" class="w-130">
            <h2 class="mt-12 text-gray-400 text-xl text-center  leading-14"><span class="block font-extrabold text-6xl text-gray-600">Oops!</span>The page you are looking for is not found</h2>
            <a href="/" wire:navigate class="mt-4 rounded-xl bg-indigo-600 px-6 py-3 text-sm/6 font-semibold text-white shadow-xs  transition-all duration-150 cursor-pointer hover:shadow-md hover:shadow-indigo-200 hover:bg-indigo-500 hover:border hover:border-white hover:-translate-y-0.5 active:bg-indigo-600 active:translate-y-0.5 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Back to home</a>
        </main>
    </body>

</html>
