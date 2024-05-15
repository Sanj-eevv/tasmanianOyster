@extends('layouts.front.index')
@push('styles')
    <style>
        #john_hero_video{
            object-fit: initial;
            width: 100%;
            min-height: calc(100vh - 80px);
            max-height: 100vh;
        }
        @media (min-width: 640px) {
            #john_hero_video{
                min-height: calc(min(1000px,100vh) - 100px);
                max-height: 1000px;
            }
        }
    </style>
@endpush
@section('content')
    <div class="john-hero-section relative">
        <div class="container">
            <div class="absolute absolute-center-vertical">
                <div class="min-h-[60px]">
                    <h1 class="hero-title" id="john_title"></h1>
                </div>
                <h2 class="hero-subtitle" id="john_subtitle"></h2>
            </div>
            <div class="absolute text-white left-1/2 bottom-0 -translate-x-1/2">
                <span class="uppercase text-center text-base">Scroll to discover</span>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 mt-2 mb-1 discover-icon mx-auto">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"></path>
                </svg>
            </div>

        </div>
        <video id="john_hero_video" autoplay loop muted>
            <source src="https://video.wixstatic.com/video/508bbd_8c41e81b772b4fd3a6ef1c44119a58d7/720p/mp4/file.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </div>
    <div class="bg-black">
        <div class="h-[400px] sm:h-[600px] w-full" data-aos="fade-up" data-aos-duration="2000">
            <img src="{{Vite::asset('resources/images/front/john2.webp')}}" alt="john reserve" class="cover-image h-full w-full">
        </div>
    </div>
    <div class="bg-black overflow-x-hidden">
        <div class="container john-info-section text-white pt-[60px]">
                <div class="flex gap-[60px] mb-[60px] relative  flex-col md:flex-row" data-aos="fade-right" data-aos-duration="2000">
                    <div class="sm:basis-1/2">
                        <img src="{{Vite::asset('resources/images/front/john-info.png')}}" alt="john info one" class="h-[400px] cover-image w-full">
                    </div>
                    <div class="sm:basis-1/2 flex items-center">
                        <p class="text-justify">
                            I've sold cars & real estate, harvested vegetables, owned a service station and a men's wear store. I'm a boiler-maker-welder by trade and I've built and raced speedway cars . . . . but none of that comes close to the excitement and challenge of nurturing the perfect oyster in the bone-snapping cold, wet and wild waters of Tasmania.
                        </p>
                    </div>
                </div>
                <div class="flex gap-[60px] pb-[60px] flex-col md:flex-row-reverse" data-aos="fade-left" data-aos-duration="2000">
                    <div class="sm:basis-1/2">
                        <img src="{{Vite::asset('resources/images/front/john-info-2.png')}}" alt="john info two"  class="h-[400px] cover-image w-full">
                    </div>
                    <div class="sm:basis-1/2 flex items-center">
                        <p class="text-justify">

                            I've been patiently developing a unique farming technique; I've failed more often than I care to remember and after some 30 odd years of blood, sweat and tears, I've finally nailed it. The hard-fought knowledge and meticulous craftsmanship invested, and the precious, exclusive provenance of these oysters is the culmination of my life's work.
                        </p>
                    </div>
                </div>
            </div>
    </div>
@endsection
@push('scripts')
    <script>
        $(document).ready(function (){
            new Typed('#john_title', {
                strings: ['John\'s Reserve.'],
                typeSpeed: 100,
                showCursor: false,
                loop: true,
                backDelay: 1700,
            });
            new Typed('#john_subtitle', {
                strings: ['Read the story'],
                typeSpeed: 100,
                showCursor: false,
                loop: false,
            });
        })
    </script>
@endpush