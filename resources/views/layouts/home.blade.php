<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="">

    <meta property="og:title" content="">
    <meta property="og:type" content="">
    <meta property="og:url" content="">
    <meta property="og:image" content="">

    <title>Conciergerie Toinette</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body class="font-sans antialiased">
    @include('navbar.navbar')

    <main>
        {{ $slot }}
    </main>

    <footer class="w-full bg-white text-center">
        <p class="text-blk text-xs sm:text-sm p-4">
            © 2024 | S.A.S.U. « CONCIERGERIE TOINETTE » | 06 83 98 25 59 | MENTIONS LEGALES
        </p>
    </footer>
</body>
</html>
