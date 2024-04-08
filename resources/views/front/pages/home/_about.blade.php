<?php
$homeAbout = config('static.home.about');
?>
<section class="section-about-us section-margin-top overflow-x-hidden">
    <div class="container">
        <h2 class="font-bold tracking-wide uppercase text-lg"  data-aos="fade-right" data-aos-duration="2000">{{$homeAbout['heading']}}</h2>
        <div class="flex flex-col md:flex-row gap-8">
            <div class="about-us-left-col md:basis-2/5">
                <h2 class="font-bold text-2xl uppercase tracking-wide mb-2" data-aos="fade-right" data-aos-duration="2000">{{$homeAbout['sub_heading']}}</h2>
                <p data-aos="fade-right" data-aos-duration="2000">
                    {{$homeAbout['description']}}
                </p>
            </div>
            <div class="about-us-right-col" data-aos="fade-left" data-aos-duration="2000">
                <div class="flex  gap-x-4 items-end">
                    <div class="w-1/2">
                        <img src="{{Vite::asset($homeAbout['image_src_one'])}}" alt="About us image 1"
                             class="h-[250px]  sm:h-[350px] md:h-[400px] object-center object-cover max-w-full w-full"
                        >
                        <a href="{{url($homeAbout['button_link'])}}" class="border border-black uppercase block text-center w-full border-[2px] mt-4 py-3 px-6 text-sm hover:bg-black hover:text-white transition ease-in-out duration-300">{{$homeAbout['button_text']}}</a>
                    </div>
                    <div class="w-1/2">
                    <img src="{{Vite::asset($homeAbout['image_src_two'])}}" alt="About us image 2"
                         class="h-[295px] sm:h-[395px] md:h-[445px] object-center object-cover max-w-full w-full"
                    >
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>