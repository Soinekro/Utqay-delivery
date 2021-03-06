<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    {{-- Icon --}}
    <link rel="shortcut icon" href="{{ asset('img/utqay.icon.jpg') }}" type="image/x-icon">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    @livewireStyles

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
</head>

<body class="font-sans antialiased">
    <x-jet-banner />

    <div class="min-h-screen bg-gray-300">
        {{-- <div class="fixed top-0 inset-x-0 bg-blue-900 flex text-sm uppercase font-mono"> --}}
            @include('navigation-menu')
{{--         </div> --}}
        <!-- Page Heading -->
        @if (isset($header))
            <header class="bg-gray-100 shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endif

        <!-- Page Content -->
        <main class=" py-16">
            {{ $slot }}
        </main>
    </div>
    <div class=" bg-blue-800">
        @include('layouts.footer')
    </div>


    @stack('modals')

    @livewireScripts
</body>

</html>
