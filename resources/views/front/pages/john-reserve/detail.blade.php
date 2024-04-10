@extends('layouts.front.index')
@push('styles')
    <style>
        .john-reserve-detail .hero-title{
            font-family: "DM Sans",  "poppins", sans-serif;
            font-optical-sizing: auto;
            font-weight: 500;
            font-style: normal;
        }
        svg.pointer{
            height: 45px;
            width: 45px;
        }
        svg.pointer [data-color="1"] {
            fill: #C59A84;
        }
        svg.pointer [data-color="2"]{
            fill: #000000;
        }
        .range-label{
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            top: -40px;
        }
    </style>
@endpush
@section('content')
    <div class="bg-black text-white">
        <div class="container john-reserve-detail">
            <div class="flex gap-24">
                <div class="min-h-[500px] max-h-[700px] flex-1">
                    <img src="{{asset("storage/uploads/john-reserve-details.webp")}}" alt="John Reserve Details"
                         class="cover-image h-full w-full">
                </div>
                <div class="flex-1 pt-10">
                    <div class="relative py-8 bg-black -left-3/4 pl-20 mb-8">
                        <h1 class="hero-title whitespace-nowrap">{{$johnReserve->title}}</h1>
                    </div>
                    <p class="tracking-wide font-extralight leading-8 text-justify">
                        {{$johnReserve->description}}
                    </p>
                </div>
            </div>
        </div>
        <div class="container relative pb-12">
           @include('front.pages.john-reserve._range_slider', [
                    'slider_title' => 'Umani',
                    'label_1' => 'Low',
                    'label_2' => 'Medium',
                    'label_3' => 'High',
                    'value' => $johnReserve->umami,
           ])
            @include('front.pages.john-reserve._range_slider', [
                   'slider_title' => 'saltiness',
                   'label_1' => 'Low',
                   'label_2' => 'Medium',
                   'label_3' => 'High',
                   'value' => $johnReserve->saltiness,
          ])
            @include('front.pages.john-reserve._range_slider', [
                   'slider_title' => 'texture',
                   'label_1' => 'Low',
                   'label_2' => 'Medium',
                   'label_3' => 'High',
                   'value' => $johnReserve->texture,
          ])
            @include('front.pages.john-reserve._range_slider', [
                   'slider_title' => 'finish',
                   'label_1' => 'Low',
                   'label_2' => 'Medium',
                   'label_3' => 'High',
                   'value' => $johnReserve->finish,
          ])
        </div>
    </div>
@endsection
@push('scripts')
@endpush