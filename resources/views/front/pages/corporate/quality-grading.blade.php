@extends('layouts.front.index')
@section('content')
    <div class="bg-black relative">
        <div class="container">
            <div class="overlay"></div>
            <div class="absolute absolute-center-vertical">
                <div class="min-h-[60px]">
                    <h1 class="hero-title" id="grading_system_title"></h1>
                </div>
            </div>
        </div>
        <div class="h-[400px] sm:h-[600px] w-full">
            <img src="{{Vite::asset('resources/images/front/grading-system.jpeg')}}" alt="Grading System" class="cover-image h-full w-full">
        </div>
    </div>
    <div class="bg-black">
        <div class="container">
            <img src="{{Vite::asset('resources/images/front/grading-3.jpeg')}}" alt="Grading Image" class="cover-image h-full md:w-[80%] mx-auto">
            <img src="{{Vite::asset('resources/images/front/grading-2.jpeg')}}" alt="Grading Image" class="cover-image h-full md:w-[80%] mx-auto">
        </div>
    </div>
@endsection
@push('scripts')
    <script>
        $(document).ready(function (){
            new Typed('#grading_system_title', {
                strings: ['Quality Grading System'],
                typeSpeed: 100,
                showCursor: false,
                loop: true,
                backDelay: 1700,
            });
        })
    </script>
@endpush