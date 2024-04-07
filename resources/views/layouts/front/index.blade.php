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
</head>
<body class="{{!empty($transparentHeader) ? 'nav-fixed' : ''}} min-h-screen flex flex-col">
@include('layouts.front._partials._header', ['transparentHeader' => !empty($transparentHeader)])
<div class="main flex-1">
@yield('content')
</div>
@include('layouts.front._partials._footer')
@include('layouts.front._partials._foot')
@yield('scripts')
@stack('scripts')
</body>
</html>
