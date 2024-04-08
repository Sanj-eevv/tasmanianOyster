<?php
     $homeHero = config('static.home.hero');
?>
<div class="min-h-screen max-h-[900px] relative text-white">
    <img class="hero-bg absolute inset-0 -z-10 object-cover h-full w-full max-h-full object-center" src="{{Vite::asset($homeHero['image_src'])}}"
         alt="background hero image">
    <div class="container">
        <div class="absolute bottom-[70px]">
            <h1 class="hero-title" data-aos="fade-up" data-aos-duration="1800">{!! $homeHero['heading'] !!}</h1>
            <h2 class="hero-subtitle" data-aos="fade-up" data-aos-duration="2400" data-aos-offset="60px">{{$homeHero['sub_heading']}}</h2>
            <div data-aos="fade-up" data-aos-duration="3000" data-aos-offset="60px">
                <a  href="{{url($homeHero['button_link'])}}" class="border border-white border-[2px] inline-block mt-4 py-2 px-6 text-sm hover:bg-white hover:text-black transition ease-in-out duration-300">
                    {{$homeHero['button_text']}}</a>
            </div>
        </div>
    </div>
</div>