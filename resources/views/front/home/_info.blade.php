<?php
$homeBanner = config('static.home.banner');
?>
<section class="section-info h-[400px] sm:h-[500px] md:h-[720px] relative section-margin-top">
    <div class="">
        <img src="{{Vite::asset($homeBanner['image_src'])}}" alt="Info"
             class="cover-image absolute h-full -z-10 w-full">
        <div class="info-text text-white absolute absolute-center">
            <h2 class="font-bold text-3xl sm:text-4xl md:text-5xl uppercase" data-aos="fade-up" data-aos-duration="1800">{{$homeBanner['heading']}}</h2>
            <h3 class="font-medium text-xl sm:text-2xl uppercase tracking-wide mt-2" data-aos="fade-up" data-aos-duration="2400" data-aos-offset="60px">{{$homeBanner['sub_heading']}}</h3>
            <span class="block mt-2 tracking-wide" data-aos="fade-up" data-aos-duration="3000" data-aos-offset="60px">{{$homeBanner['sub_title']}}</span>
        </div>
    </div>
</section>
