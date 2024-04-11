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
            <div class="flex flex-col lg:flex-row lg:gap-24 pt-3">
                <div class="lg:min-h-[500px] lg:max-h-[700px] flex-1">
                    <img src="{{asset("storage/uploads/$johnReserve->hero_image")}}" alt="John Reserve Details"
                         class="cover-image h-full h-[400px] w-[450px] lg:h-full lg:w-full mx-auto">
                </div>
                <div class="flex-1 pt-10">
                    <div class="relative py-6 lg:py-8 bg-black lg:-left-3/4 lg:pl-20 lg:mb-8">
                        <h1 class="hero-title whitespace-nowrap text-center">{{$johnReserve->title}}</h1>
                    </div>
                    <p class="tracking-wide font-extralight leading-8 text-justify">
                        {{$johnReserve->description}}
                    </p>
                </div>
            </div>
        </div>
         <div class="container relative py-12">
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