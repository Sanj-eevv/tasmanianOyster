<?php
     $homeHero = config('static.home.hero');
?>
<header class="min-h-screen max-h-[900px] relative text-white">
    <img class="hero-bg absolute inset-0 -z-10 object-cover h-full w-full max-h-full object-center" src="{{Vite::asset($homeHero['image_src'])}}"

         alt="background hero image">
    <div class="bg-black/60 py-4 nav-container">
        <div class="flex items-center justify-between container">
            <div>
                <img
                        class="h-[80px] w-[100px] lg:h-[94px] lg:w-[113px] bg-center bg-cover"
                        src="{{ asset("storage/uploads/settings/".config('app.settings.app_logo')) }}" alt="logo">
            </div>
            <nav class="hidden md:block">
                <ul class="flex items-center text-sm md:gap-x-6 lg:gap-x-8 tracking-wide">
                    <li><a href="#" class="font-medium pb-[10px]">ABOUT US</a></li>
                    <li class="relative parent-menu">
                        <a href="#" class="font-medium pb-[10px]">JON'S RESERVE</a>
                        <div class="sub-menu hidden absolute min-w-[210px] top-[30px]">
                            <ul>
                                <li class="py-[8px] px-[20px] hover:bg-white bg-black/60 hover:text-black duration-300 ease-linear"><a href="#" class="whitespace-nowrap first-of-type:rounded-t-lg text-sm font-medium">Boomer Bay</a> </li>
                                <li class="py-[8px] px-[20px] hover:bg-white bg-black/60 hover:text-black duration-300 ease-linear"><a href="#" class="whitespace-nowrap first-of-type:rounded-t-lg text-sm font-medium">Duck Bay</a> </li>
                                <li class="py-[8px] px-[20px] hover:bg-white bg-black/60 hover:text-black duration-300 ease-linear"><a href="#" class="whitespace-nowrap first-of-type:rounded-t-lg text-sm font-medium">Pipeclay Bay</a> </li>
                                <li class="py-[8px] px-[20px] hover:bg-white bg-black/60 hover:text-black duration-300 ease-linear"><a href="#" class="whitespace-nowrap first-of-type:rounded-t-lg text-sm font-medium">Boomer Bay</a> </li>
                                <li class="py-[8px] px-[20px] hover:bg-white bg-black/60 hover:text-black duration-300 ease-linear"><a href="#" class="whitespace-nowrap first-of-type:rounded-t-lg text-sm font-medium">Pttwater</a><li>
                                <li class="py-[8px] px-[20px] hover:bg-white bg-black/60 hover:text-black duration-300 ease-linear"><a href="#" class="whitespace-nowrap first-of-type:rounded-t-lg text-sm font-medium">Exlcusive Suppliers</a></li>
                            </ul>
                        </div>
                    </li>
                    <li><a href="#" class="font-medium pb-[10px]">GROWING REGION</a></li>
                    <li><a href="#" class="font-medium pb-[10px]">CORPORATE</a></li>
                    @auth
                        <li class="border font-medium border-white border-[2px] inline-block cursor-pointer py-2 px-6 text-sm hover:bg-white rounded-full hover:text-black transition ease-in-out duration-300"
                        onClick="document.getElementById('logout-form').submit()"
                        >LOGOUT</li>
                    @endauth
                </ul>
                @auth
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                @endauth
            </nav>
        </div>
    </div>
    <div class="container">
        <div class="absolute bottom-[70px]">
            <h1 class="uppercase text-4xl sm:text-5xl md:text-6xl font-bold tracking-wider" data-aos="fade-up" data-aos-duration="1800">{!! $homeHero['heading'] !!}</h1>
            <h2 class="uppercase text-2xl font-bolder mt-4 tracking-wider" data-aos="fade-up" data-aos-duration="2400" data-aos-offset="60px">{{$homeHero['sub_heading']}}</h2>
            <div data-aos="fade-up" data-aos-duration="3000" data-aos-offset="60px">
                <a  href="{{url($homeHero['button_link'])}}" class="border border-white border-[2px] inline-block mt-4 py-2 px-6 text-sm hover:bg-white hover:text-black transition ease-in-out duration-300">
                    {{$homeHero['button_text']}}</a>
            </div>
        </div>
    </div>
</header>