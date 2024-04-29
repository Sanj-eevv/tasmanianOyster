@extends('layouts.front.index')
@section('content')
    <div class="bg-black relative">
        <div class="container">
            <div class="overlay"></div>
            <div class="absolute absolute-center-vertical">
                <div class="min-h-[60px]">
                    <h1 class="hero-title" id="investors_title"></h1>
                </div>
            </div>
        </div>
        <div class="h-[400px] sm:h-[600px] w-full">
            <img src="{{Vite::asset('resources/images/front/investors-1.jpeg')}}" alt="Grading System" class="cover-image h-full w-full">
        </div>
    </div>
    <div class="bg-black min-h-[500px] relative py-8 pb-16 lg:pb-32"  style="background-repeat: no-repeat; background-size: cover; background-position: center; background-image: url('{{Vite::asset('resources/images/front/investors-2.jpeg')}}'">
        <div class="overlay"></div>
        <div class="container text-white">
            <h2 class="section-title capitalize" data-aos="fade-up" data-aos-duration="1200">Investors</h2>
            <div class="description-div" data-aos="fade-up" data-aos-duration="1500">
                <p class="text-lg">
                    Tasmanian Oyster Co. is the largest vertically integrated oyster business in Australia. We produce, process and market premium oysters for both the Australian domestic and export markets.<br><br>
                    We start by growing spat (baby oysters) in our state of the art hatchery. Spat are then moved to farms in our various growing regions where they grow in pristine, clean waters until harvest.<br><br>
                    Tasmanian Oyster Co. employs over 100 people across Australia.
                </p>
            </div>
            <h2 class="section-title capitalize" data-aos="fade-up" data-aos-duration="1800">Interested In Learning More?</h2>
            <div class="description-div text-lg" data-aos="fade-up" data-aos-duration="1500">
               <span class="uppercase block">{{config('app.admin.name')}} | CEO</span>
                <p>Phone: <span>{{config('app.settings.company_phone')}}</span></p>
                <p>Address: <span>{{config('app.settings.company_address')}}</span></p>
                <p>Email: <span>{{config('app.settings.company_email')}}</span></p>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script>
        $(document).ready(function (){
            new Typed('#investors_title', {
                strings: ['Investors'],
                typeSpeed: 100,
                showCursor: false,
                loop: true,
                backDelay: 1700,
            });
        })
    </script>
@endpush