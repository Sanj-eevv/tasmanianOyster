<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{config('app.name')}}</title>

    <!-- Fonts -->
    @include('layouts.front._head')
    <!-- Styles -->
    <style>
    </style>
</head>
<body class="nav-fixed">

    @include('front.home._header')
    @include('front.home._about')
    @include('front.home._info')
    @include('front.home._contact')
    @if(config('app.settings.map_iframe'))
        @include('front.home._map')
    @endif
    @include('front.home._footer')
    @include('layouts.front._foot')
    <script>
        AOS.init();
    </script>
</body>
</html>
