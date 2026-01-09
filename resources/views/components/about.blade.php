<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Sparkle Cloud</title>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Syne:wght@400..800&display=swap" rel="stylesheet">


        <script src="https://unpkg.com/three@0.160.0/build/three.min.js"></script>

        @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/js/hero-three.js'])


    </head>
    <body class="min-h-screen overflow-x-hidden bg-[#0b0b0e] text-white antialiased">
        <div class="w-full pt-6">
            <x-header />
            <x-hero />
            <x-logos />
            <x-features />
            <x-text-image />
            <x-split-section />
            <x-templates/>
            <x-faq />
            <x-container-single />
            <x-footer />
        </div>

        @stack('scripts')
    </body>
</html>
