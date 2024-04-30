@extends('layouts.front.index')
@section('content')
    <div class="bg-black relative">
        <div class="container">
            <div class="overlay"></div>
            <div class="absolute absolute-center-vertical">
                <div class="min-h-[60px]">
                    <h1 class="hero-title" id="publication_title"></h1>
                </div>
            </div>
        </div>
        <div class="h-[400px] sm:h-[600px] w-full">
            <img src="{{Vite::asset('resources/images/front/publications-1.jpeg')}}" alt="Grading System" class="cover-image h-full w-full">
        </div>
    </div>
    <div class="bg-black min-h-[500px] relative py-8 pb-16 lg:pb-32"  style="background-repeat: no-repeat; background-size: cover; background-position: center; background-image: url('{{Vite::asset('resources/images/front/publications-2.jpeg')}}'">
        <div class="overlay"></div>
        <div class="container text-white">
            <h2 class="section-title capitalize" data-aos="fade-up" data-aos-duration="1200">Publications</h2>
            <div class="description-div" data-aos="fade-up" data-aos-duration="1500">
                Click on the buttons below to view.
            </div>
            <div class="flex gap-8 flex-wrap justify-center lg:justify-between">
                <?php
                    $aosDuration = 1800
                ?>
                @forelse($publications as $publicationType => $publicationLists)
                    <div class="w-full xsm:w-fit " data-aos="fade-up" data-aos-duration="{{$aosDuration}}">
                        <h2 class="section-title capitalize !pb-1 !font-medium">{{ucwords(strtolower(str_replace(['_', '-'], [' ', ' '], $publicationType)))}}</h2>
                        <div class="flex flex-col gap-3">
                        @foreach($publicationLists as $publication)
                                <a target="_blank" href="{{asset("storage/uploads/$publication->file_url")}}" class="px-12 py-3 border border-white relative transition duration-300 hover:bg-white hover:text-black text-center min-w-[180px] capitalize">{{$publication->name}}</a>
                        @endforeach
                        </div>
                    </div>
                   <?php
                    $aosDuration = $aosDuration + 300
                   ?>
                @empty
                @endforelse
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script>
        $(document).ready(function (){
            new Typed('#publication_title', {
                strings: ['Publications'],
                typeSpeed: 100,
                showCursor: false,
                loop: true,
                backDelay: 1700,
            });
        })
    </script>
@endpush