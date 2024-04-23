<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="Des bras en plus pour gérer votre quotidien">

    <meta property="og:title" content="Conciergerie Toinette">
    <meta property="og:type" content="siteweb">
    <meta property="og:url" content="www.conciergerie-toinette.fr">
    <meta property="og:description" content="Des bras en plus pour gérer votre quotidien">
    <meta property="og:image" content="{{ asset('assets/logo/logo.png')}}">

    <link rel="icon" href="{{ asset('favicon.ico')}}" />

    <title>{{ config('app.name', 'Laravel') }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body class="antialiased">
@include('navbar.navbar')

<main>
    {{ $slot }}
</main>

<footer class="w-full bg-white text-center">
    <p class="text-blk text-xs sm:text-sm p-4">
        © 2024 | S.A.S.U. « CONCIERGERIE TOINETTE » | 06 83 98 25 59 | 
        <a class="hover:underline" href="{{ route('mentions-legales')}}">MENTIONS LEGALES</a>
    </p>
</footer>
</body>
</html>
