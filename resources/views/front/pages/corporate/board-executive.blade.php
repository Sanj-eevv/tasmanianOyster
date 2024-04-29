@extends('layouts.front.index')
@push('styles')
    <style>
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
                    <h1 class="hero-title" id="board_executive_title"></h1>
                </div>
            </div>
        </div>
        <div class="h-[400px] sm:h-[600px] w-full">
            <img src="{{Vite::asset('resources/images/front/board-executive.jpeg')}}" alt="Grading System" class="cover-image h-full w-full">
        </div>
    </div>
    @if(count($boardExecutives) > 0)
    <div class="board-executive-teams bg-black text-white">
        <h2 class="section-title text-center !font-light">Corporate Team</h2>
        <div class="container mt-4">
            <div class="flex justify-center md:justify-between items-center gap-6 flex-wrap" id="teams-slider">
                @foreach($boardExecutives as $boardExecutive)
                    <div class="!flex flex-col items-center justify-center xmax-w-[250px]">
                        <img src="{{asset("storage/uploads/$boardExecutive->image")}}" alt="{{$boardExecutive->name}}"
                             class="cover-image h-[220px] w-[220px] rounded-full">
                        <span class="team-name uppercase text-lg font-medium block mt-2">{{$boardExecutive->name}}</span>
                        <span class="role capitalize block mt-2">{{$boardExecutive->role}}</span>
                        <p class="text-center mt-2">{{$boardExecutive->description}}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    @endif
@endsection
@push('scripts')
    <script>
        $(document).ready(function (){
            new Typed('#board_executive_title', {
                strings: ['Board And Executive'],
                typeSpeed: 100,
                showCursor: false,
                loop: true,
                backDelay: 1700,
            });

            @if(count($boardExecutives) > 3)
            $('#teams-slider').slick({
                autoplaySpeed: 800,
                speed: 3000,
                infinite: true,
                slidesToShow: 1,
                slidesToScroll: 1,
                centerMode: false,
                autoplay: true,
                arrows: false,
                pauseOnHover: false,
                dots: false,
                mobileFirst: true,
                responsive: [
                    {
                        breakpoint: 768,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 1,
                        }
                    },
                    {
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 2,
                        }
                    },
                    {
                        breakpoint: 1536,
                        settings: {
                            slidesToShow: 4,
                            slidesToScroll: 3,
                        }
                    },
                ]
            });
            @endif
        })
    </script>
@endpush