@extends('layouts.front.index')
@section('content')
    <div class="bg-black relative">
        <div class="container">
            <div class="overlay"></div>
            <div class="absolute absolute-center-vertical">
                <div class="min-h-[60px]">
                    <h1 class="hero-title" id="story_title"></h1>
                </div>
                <h2 class="hero-subtitle" id="story_subtitle"></h2>
            </div>
        </div>
        <div class="h-[400px] sm:h-[600px] w-full">
            <img src="{{Vite::asset('resources/images/front/story.png')}}" alt="Story" class="cover-image h-full w-full">
        </div>
    </div>
    <div class="story-section bg-black py-12">
        <div class="container">
            <h1 class="section-title text-white text-center !pt-0 !pb-2" data-aos="fade-up" data-aos-duration="1500">{{config('app.name')}}</h1>
            <h2 class="hero-subtitle text-center" data-aos="fade-up" data-aos-duration="2000" data-aos-offset="60px">A BRIEF HISTORY</h2>
            @include('front.pages.story._timeline')
            @include('front.pages.story._process')
        </div>
    </div>
@endsection
@push('scripts')
    <script>
        $(document).ready(function (){
            $('.how-we-process-container').each(function (index,element){
                let nextEl = $(element).next();
                let height = $(nextEl).height();
                $(element).css('--after-height', height/2 + 'px');
            })

            new Typed('#story_title', {
                strings: ['Our Stories.'],
                typeSpeed: 100,
                showCursor: false,
                loop: true,
                backDelay: 1700,
            });
            new Typed('#story_subtitle', {
                strings: ['Read the story'],
                typeSpeed: 100,
                showCursor: false,
                loop: false,
            });
        })
    </script>
@endpush