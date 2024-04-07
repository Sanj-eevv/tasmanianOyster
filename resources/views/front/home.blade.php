@extends('layouts.front.index', ['transparentHeader' => true])
@section('title', config('app.name'). '- Home')
@section('content')
    @include('front.home._header')
    @include('front.home._about')
    @include('front.home._info')
    @include('front.home._contact')
    @if(config('app.settings.map_iframe'))
        @include('front.home._map')
    @endif
@endsection