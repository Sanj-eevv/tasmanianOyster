<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title',config('app.name'))</title>

    <!-- Fonts -->
    @include('layouts.front._partials._head')
    @yield('styles')
    @stack('styles')
    <!-- Styles -->
    <style>
    </style>
</head>
<body class="nav-fixed min-h-screen flex flex-col justify-between">
@include('layouts.front._partials._header')
<div class="main">
@yield('content')
</div>
@include('layouts.front._partials._footer')
@include('layouts.front._partials._foot')
@yield('scripts')
@stack('scripts')
</body>
</html>
