@extends('layouts.front.index')
@push('styles')
    <style>
        .detail-page-href,
        .detail-page-href svg{
            transition: all 0.3s linear;
        }
        .detail-page-href:hover svg{
            fill: #000;
        }
        .fade-in {
            animation: fadeIn 0.5s ease-in-out;
        }

        .fade-out {
            animation: fadeOut 0.5s ease-in-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        @keyframes fadeOut {
            from {
                opacity: 1;
            }
            to {
                opacity: 0;
            }
        }
    </style>
@endpush
@section('content')
    <div class="bg-black relative">
        <div class="container">
            <div class="overlay"></div>
            <div class="absolute absolute-center-vertical">
                <div class="min-h-[60px]">
                    <h1 class="hero-title" id="shop_now_title"></h1>
                </div>
            </div>
        </div>
        <div class="h-[400px] sm:h-[600px] w-full">
            <img src="{{Vite::asset('resources/images/front/shop-now.jpeg')}}" alt="Story" class="cover-image h-full w-full">
        </div>
    </div>
    <div class="story-section bg-black py-12">
        <div class="container">
            <h1 class="section-title text-white text-center !pt-0" data-aos="fade-up" data-aos-duration="1500">{{config('app.name')}}</h1>
            <div class="text-right mb-8">
                <label for="searchInput" class="">
                    <input id="searchInput" class="outline-none py-1 px-2 rounded-md" placeholder="Search..." autocomplete="off">
                </label>
            </div>
            <div class="grid grid-cols-1 xsm:grid-cols-2 md:grid-cols-3">
                @forelse($johnReserves as $johnReserve)
                    <div style="background-image: url('{{asset("storage/uploads/$johnReserve->hero_image")}}'); background-repeat: no-repeat" class="bg-cover bg-center h-[350px] xsm:h-[280px] sm:h-[350px] lg:h-[350px] w-full relative order-item fade-in" data-title="{{$johnReserve->title}}">
                        <div class="overlay"></div>
                        <div class="flex justify-center align-items-center flex-col gap-3 relative h-full">
                            <h2 class="font-medium text-2xl text-white mx-auto tracking-wide flex gap-2">
                                {{$johnReserve->title}}
                            </h2>
                            <a href="{{route('front.john-reserve.details', $johnReserve->slug)}}" class="block border border-white rounded-full p-3 flex justify-center items-center w-fit mx-auto hover:bg-white detail-page-href">
                                <svg data-bbox="20 59.5 160 81.001" fill="#fff" viewBox="0 0 200 200" height="20" width="20" xmlns="http://www.w3.org/2000/svg" data-type="shape" style="transform: rotate(90deg)">
                                    <g>
                                        <path d="M177.687 128.054L105.35 61.402a7.205 7.205 0 0 0-5.35-1.886 7.198 7.198 0 0 0-5.349 1.886l-72.338 66.652a7.165 7.165 0 0 0-.407 10.138 7.172 7.172 0 0 0 5.283 2.309c1.743 0 3.49-.629 4.872-1.902L100 75.999l67.939 62.598a7.197 7.197 0 0 0 10.155-.406 7.163 7.163 0 0 0-.407-10.137z"></path>
                                    </g>
                                </svg>
                            </a>
                            <a href="javascript:void(0)"
                               data-id="{{$johnReserve->id}}"
                               data-title="{{$johnReserve->title}}"
                               data-umami="{{$johnReserve->umami}}"
                               data-saltiness="{{$johnReserve->saltiness}}"
                               data-texture="{{$johnReserve->texture}}"
                               data-finish="{{$johnReserve->finish}}"
                               class="block border border-white p-3 flex justify-center items-center w-fit text-white mx-auto min-w-[200px] lg:min-w-[250px] transition duration-500 hover:text-black hover:bg-white buy-now">
                                BUY NOW
                            </a>
                        </div>
                    </div>
                @empty
                @endforelse
            </div>

        </div>
    </div>
    @include('front.pages.order._partials._order_modal')
@endsection
@push('scripts')
    <script>
        $(document).ready(function () {
            new Typed('#shop_now_title', {
                strings: ['Shop Now.'],
                typeSpeed: 100,
                showCursor: false,
                loop: true,
                backDelay: 1700,
            });

            document.getElementById('searchInput').addEventListener('input', function () {
                let searchTerm = this.value.toLowerCase();
                let cards = document.querySelectorAll('.order-item');

                cards.forEach(function (card) {
                    let title = card.dataset.title.toLowerCase();
                    if (title.includes(searchTerm)) {
                        if (card.classList.contains('fade-out')) {
                            card.classList.remove('fade-out');
                        }
                        card.classList.add('fade-in');
                        card.style.display = 'block';
                    } else {
                        if (card.classList.contains('fade-in')) {
                            card.classList.remove('fade-in');
                        }
                        card.classList.add('fade-out');
                        card.style.display = 'none';
                    }
                });
            });

        });
    </script>
@endpush