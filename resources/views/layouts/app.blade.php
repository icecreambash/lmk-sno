<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name') }}</title>
    <link rel="preload"
          href="popcorn/logo.svg"
          as="image"
          type="image/svg+xml" />
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body>
    @include('layouts.navbar')
    @yield('content')
</body>
</html>
