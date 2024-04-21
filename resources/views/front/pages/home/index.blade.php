@extends('layouts.front.index', ['transparentHeader' => true])
@section('title', config('app.name'). '- Home')
@section('content')
    @include('front.pages.home._hero')
    @include('front.pages.home._about')
    @include('front.pages.home._info')
    @include('front.pages.home._contact')
    @include('front.pages.home._gallery')
    @if(config('app.settings.map_iframe'))
        @include('front.pages.home._map')
    @endif
@endsection