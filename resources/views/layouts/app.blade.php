<?php
    $footerSearch = config('dcComics.footerSearch');
?>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('pageTitle', 'Page 1')</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>
    @include('partials.banner')
    @include('partials.header')
    @include('partials.jumbotron')
    <main>
        @include('partials.comics')
    </main>
    <!--DA ERRORE-->
   {{--@include('partials.footer', compact('footerSearch'))--}}

</body>

</html>
