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
    <div class="board-executive-teams bg-black text-white">
        <h2 class="section-title text-center !font-light">Corporate Team</h2>
        <div class="container mt-4">
            <div class="flex justify-center md:justify-between items-center gap-6 flex-wrap" id="teams-slider">
                    <div class="!flex flex-col items-center justify-center max-w-[250px]">
                        <img src="{{asset("storage/uploads/board-executive/board-executive-1.png")}}"
                             class="cover-image h-[220px] w-[220px] rounded-full">
                        <span class="team-name uppercase text-lg font-medium block mt-2">ALEXANDER (SANDY) BEARD</span>
                        <span class="role capitalize block mt-2">CHAIRMAN</span>
                        <p class="text-center mt-2">B COM, MAICD, FCA
                            Former CEO of ASX listed CVC Ltd. Chairman of ASX listed Hancock & Gore Limited, FOS Capital Ltd and Anagenics Limited. Director of ASX listed Centrepoint Alliance Limited.</p>
                    </div>
            </div>
        </div>
    </div>
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

            // $('#teams-slider').slick({
            //     autoplaySpeed: 800,
            //     speed: 3000,
            //     infinite: true,
            //     slidesToShow: 3,
            //     slidesToScroll: 1,
            //     centerMode: true,
            //     autoplay: true,
            //     arrows: false,
            //     pauseOnHover: false,
            //     dots: false,
            // });
        })
    </script>
@endpush