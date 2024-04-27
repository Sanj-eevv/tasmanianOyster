@extends('layouts.front.index')
@push('styles')
    <style>
       .region-text p{
           line-height: 24px !important;
       }
       .description-div p:not(:last-child){
            margin-bottom: 10px;
       }
       p a{
           text-decoration: underline;
       }
       #teams-slider .slick-list{
            width: 100%;
       }
       #teams-slider .slick-track {
           display: flex;
       }
       .slick-track .slick-slide {
           display: flex !important;
           align-items: center;
           justify-content: space-between;
       }
    </style>
@endpush
@section('content')
    <div class="bg-black relative">
        <div class="container">
            <div class="overlay"></div>
            <div class="absolute absolute-center-vertical">
                <div class="min-h-[60px]">
                    <h1 class="hero-title" id="growing_region_title"></h1>
                </div>
                <h2 class="hero-subtitle" id="growing_region_subtitle"></h2>
            </div>
        </div>
        <div class="h-[400px] sm:h-[600px] w-full">
            <img src="{{asset("storage/uploads/{$growingRegion->hero_image}")}}" alt="{{$growingRegion->title}}" class="cover-image h-full w-full">
        </div>
    </div>
    <div class="bg-black min-h-[500px] relative py-8 pb-32"  style="background-repeat: no-repeat; background-size: cover; background-position: center; background-image: url('{{asset("storage/uploads/{$growingRegion->hero_image_sub}")}}'">
        <div class="absolute top-0 bottom-0 right-0 left-0 bg-black/50 -z-10"></div>
        <div class="container text-white region-text">
            <h2 class="section-title text-center capitalize" data-aos="fade-up" data-aos-duration="2000">{{$growingRegion->subtitle}}</h2>
            <div class="description-div" data-aos="fade-up" data-aos-duration="1800">{!! $growingRegion->description !!}</div>
            @if($growingRegion->characteristics || $growingRegion->tasting_note)
            <div class="flex gap-16">
                @if($growingRegion->characteristics)
                <div class="flex-1">
                    <h2 class="section-title !font-medium">Region Characteristics</h2>
                    {!! $growingRegion->characteristics !!}
                </div>
                @endif
                @if($growingRegion->tasting_note)
                <div class="flex-1">
                    <h2 class="section-title !font-medium">Tasting Notes</h2>
                    {!! $growingRegion->tasting_note !!}
                </div>
                @endif
            </div>
            @endif
        </div>
    </div>
    @if(count($growingRegion->teams) > 0)
    <div class="growing-region-teams bg-black text-white">
        <h2 class="section-title text-center !font-light">Management Team</h2>
        <div class="container mt-4">
            <div class="flex justify-center md:justify-between items-center gap-6 flex-wrap" id="teams-slider">
                @foreach($growingRegion->teams as $team)
                    <div class="!flex flex-col items-center justify-center">
                        <img src="{{asset("storage/uploads/{$team->image}")}}" alt="{{$team->name}}"
                             class="cover-image h-[220px] w-[220px] rounded-full">
                        <span class="team-name uppercase text-lg font-medium block mt-2">{{$team->name}}</span>
                        <span class="role capitalize block mt-2">{{$team->role}}</span>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    @endif
    @if(count($growingRegion->galleries) > 0)
    <div class="growing-region-image-slider bg-black text-white pt-8">
        <h2 class="section-title text-center !font-light">{{$growingRegion->title}} Image Gallery</h2>
        <div id="region-image-slider">
            @foreach($growingRegion->galleries as $team)
            <img src="{{asset("storage/uploads/{$team->file_url}")}}" class="h-[400px]" alt="{{$team->file_name}}">
            @endforeach
        </div>
    </div>
    @endif
@endsection
@push('scripts')
    <script>
        $(document).ready(function (){
            new Typed('#growing_region_title', {
                strings: ["{{strtoupper($growingRegion->title)}}"],
                typeSpeed: 100,
                showCursor: false,
                loop: true,
                backDelay: 1700,
            });
            new Typed('#growing_region_subtitle', {
                strings: ['Growing Regions'],
                typeSpeed: 100,
                showCursor: false,
                loop: false,
            });

            @if(count($growingRegion->teams) >= 3)
            $('#teams-slider').slick({
                autoplaySpeed: 800,
                speed: 3000,
                infinite: true,
                slidesToShow: 3,
                slidesToScroll: 1,
                centerMode: true,
                autoplay: true,
                arrows: false,
                pauseOnHover: false,
                dots: false,
            });
            @endif

            @if(count($growingRegion->teams) > 0)
            $('#region-image-slider').slick({
                autoplaySpeed: 800,
                speed: 3000,
                infinite: true,
                slidesToShow: 2,
                slidesToScroll: 2,
                centerMode: false,
                autoplay: true,
                arrows: false,
                pauseOnHover: false,
                dots: false,
                adaptiveHeight: false,
                mobileFirst: true,
                responsive: [
                    {
                        breakpoint: 1280,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 3,
                        }
                    },
                    {
                        breakpoint: 1536,
                        settings: {
                            slidesToShow: 4,
                            slidesToScroll: 1,
                        }
                    },
            ]
            });
            @endif
        })
    </script>
@endpush