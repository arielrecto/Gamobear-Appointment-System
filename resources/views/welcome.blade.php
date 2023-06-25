<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="antialiased">
    <div class="w-full">

        <div>
            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <a href="{{ url('/dashboard') }}"
                            class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}"
                            class="font-semibold text-gray-600 hover:text-gray-900  focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log
                            in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}"
                                class="ml-4 font-semibold text-gray-600 hover:text-gray-900  focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>


        <div class="max-w-7xl mx-auto p-6 lg:p-8 mt-6">
            <div class="rounded-lg drop-shadow-lg h-[30rem] w-[80rem] p-2 flex flex-col space-y-5">
                <h1 class="text-3xl font-bold text-center p-5">
                    Gamobear Medical Servicess
                </h1>
                <div class="flex gap-2">
                    <img src="{{ asset('image/1.jpg') }}" class="w-1/2">
                    <img src="{{ asset('image/2.jpg') }}" class="w-1/2">
                </div>
                <div class="bg-white drop-shadow-lg rounded-lg">
                    <h1 class="text-3xl text-center font-bold p-5">About Us</h1>
                    <p class="white-space p-5">
                        <span class="font-bold">WHO WE ARE</span>
                        Back in 2019 Gamobear home vaccination was built by Dr. Gamo started from a small business whose
                        mission was to give people a vaccine to keep them safe and protected, because of the diligence
                        of Dr. Gamo he's business became huge and known to everyone.
                        <br>
                        <br>
                        <span class="font-bold">WHAT WE OFFER</span>
                        Dr. Gamobear home vaccination offers RT-PCR swab test it is a gold standard of accurately
                        detecting the virus in respiratory specimens and performed by trained medical professionals, and
                        also a Rapid Anti-gen test it is alternative test with high specificity Medical Certificate
                        included RITM-validated kits and the released of the results will come out after 15-30mins.
                    </p>
                </div>
                <div class="">
                    <img src="{{ asset('image/7.jpg') }}" alt="">
                </div>
            </div>
        </div>
    </div>
</body>

</html>
