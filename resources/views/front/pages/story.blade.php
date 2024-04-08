@extends('layouts.front.index')
@push('styles')
    <style>
        div.timeline-content{
            transition: opacity 0.3s ease-in;
        }
        .timeline-date:hover + div.timeline-content{
            opacity: 1;
        }
        .how-we-process-container:not(:last-child):after{
            content: "";
            position: absolute;
            height: var(--after-height);
            width: calc(100% - 180px);
            border: 1px dashed rgba(255, 255, 2550, 0.3);
            top: 100%;

        }
        .how-we-process-container.right:after{
            border-top: 0;
            border-right: 0;
            left: 180px;
        }
        .how-we-process-container.left:after{
            border-top: 0;
            border-left: 0;
            right: 180px;
        }
    </style>
@endpush
@section('content')
    <div class="h-[400px] sm:h-[600px] w-full" data-aos="fade-up" data-aos-duration="2000">
        <img src="{{Vite::asset('resources/images/front/story.png')}}" alt="Story" class="cover-image h-full w-full">
    </div>
    <div class="story-section bg-black py-12">
        <div class="container">
            <h1 class="section-title text-white text-center !pt-0 !pb-2">{{config('app.name')}}</h1>
            <h2 class="hero-subtitle text-center">A BRIEF HISTORY</h2>
            <div class="timeline">
                <div class="mx-auto w-full h-full">
                    <div class="relative wrap overflow-hidden p-10 h-full">
                        <div class="border-2-2 absolute border-opacity-20 border-white h-full border border-dashed" style="left: 50%"></div>
                        <!-- right timeline -->
                        <div class="mb-8 flex justify-between items-center w-full right-timeline">
                            <div class="order-1 w-5/12"></div>
                            <div class="z-20 flex items-center order-1 bg-gray-800 shadow-xl w-16 h-16 rounded-full cursor-pointer timeline-date">
                                <h1 class="mx-auto font-semibold text-lg text-white">1999</h1>
                            </div>
                            <div class="order-1 bg-gray-800 rounded-lg shadow-xl w-5/12 px-6 py-4 opacity-0 timeline-content">
                                  <h3 class="mb-3 font-normal text-white text-xl">Lorem Ipsum</h3>
                                <p class="text-sm font-light leading-snug tracking-wide text-white text-opacity-50">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                            </div>
                        </div>

                        <!-- left timeline -->
                        <div class="mb-8 flex justify-between flex-row-reverse items-center w-full left-timeline">
                            <div class="order-1 w-5/12"></div>
                            <div class="z-20 flex items-center order-1 bg-gray-800 shadow-xl w-16 h-16 rounded-full cursor-pointer timeline-date">
                                <h1 class="mx-auto font-semibold text-lg text-white">2000</h1>
                            </div>
                            <div class="order-1 bg-gray-800 rounded-lg shadow-xl w-5/12 px-6 py-4 opacity-0 timeline-content">
                                  <h3 class="mb-3 font-normal text-white text-xl">Lorem Ipsum</h3>
                                <p class="text-sm font-light leading-snug tracking-wide text-white text-opacity-50">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                            </div>
                        </div>

                        <!-- right timeline -->
                        <div class="mb-8 flex justify-between items-center w-full right-timeline">
                            <div class="order-1 w-5/12"></div>
                            <div class="z-20 flex items-center order-1 bg-gray-800 shadow-xl w-16 h-16 rounded-full cursor-pointer timeline-date">
                                <h1 class="mx-auto font-semibold text-lg text-white">2001</h1>
                            </div>
                            <div class="order-1 bg-gray-800 rounded-lg shadow-xl w-5/12 px-6 py-4 opacity-0 timeline-content">
                                  <h3 class="mb-3 font-normal text-white text-xl">Lorem Ipsum</h3>
                                <p class="text-sm font-light leading-snug tracking-wide text-white text-opacity-50">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                            </div>
                        </div>

                        <!-- left timeline -->
                        <div class="mb-8 flex justify-between flex-row-reverse items-center w-full left-timeline">
                            <div class="order-1 w-5/12"></div>
                            <div class="z-20 flex items-center order-1 bg-gray-800 shadow-xl w-16 h-16 rounded-full cursor-pointer timeline-date">
                                <h1 class="mx-auto font-semibold text-lg text-white">2002</h1>
                            </div>
                            <div class="order-1 bg-gray-800 rounded-lg shadow-xl w-5/12 px-6 py-4 opacity-0 timeline-content">
                                <h3 class="mb-3 font-normal text-white text-xl">Lorem Ipsum</h3>
                                <p class="text-sm font-light leading-snug tracking-wide text-white text-opacity-50">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="how-we-process-section text-white">
                <h2 class="section-title text-center">Our Oysters Journey</h2>
                <div class="flex how-we-process-container relative right">
                    <div class="how-we-process relative inline-block p-4 rounded-lg bg-gray-800 w-[360px]">
                        <span class="font-bold text-lg">01.</span>
                        <img src="{{Vite::asset('resources/images/front/process-1.png')}}" alt="process one" class="h-[140px] w-[240px] object-contain object-center mx-auto">
                        <span class="text-lg font-semibold mt-3 inline-block">Algae Production</span>
                        <p class="text-sm mt-2 font-light">Algae is produced to feed the oyster spat.</p>
                    </div>
                    <div class="flex-1"></div>
                </div>
                <div class="flex how-we-process-container relative left">
                    <div class="flex-1"></div>
                    <div class="how-we-process relative inline-block p-4 rounded-lg bg-gray-800 w-[360px]">
                        <span class="font-bold text-lg">02.</span>
                        <img src="{{Vite::asset('resources/images/front/process-2.png')}}" alt="process one" class="h-[140px] w-[240px] object-contain object-center mx-auto">
                        <span class="text-lg font-semibold mt-3 inline-block">Spawning</span>
                        <p class="text-sm mt-2 font-light">Our skilled technicians produce baby oysters (spat)</p>
                    </div>
                </div>
                <div class="flex how-we-process-container relative right">
                     <div class="how-we-process relative inline-block p-4 rounded-lg bg-gray-800 w-[360px]">
                         <span class="font-bold text-lg">03.</span>
                         <img src="{{Vite::asset('resources/images/front/process-3.png')}}" alt="process one" class="h-[140px] w-[240px] object-contain object-center mx-auto">
                         <span class="text-lg font-semibold mt-3 inline-block">Hatchery</span>
                         <p class="text-sm mt-2 font-light">The baby oysters cared for 7 days a week, growing to 2mm in size.</p>
                     </div>
                     <div class="flex-1"></div>
                 </div>
                <div class="flex how-we-process-container relative left">
                    <div class="flex-1"></div>
                    <div class="how-we-process relative inline-block p-4 rounded-lg bg-gray-800 w-[360px]">
                        <span class="font-bold text-lg">04.</span>
                        <img src="{{Vite::asset('resources/images/front/process-4.png')}}" alt="process one" class="h-[140px] w-[240px] object-contain object-center mx-auto">
                        <span class="text-lg font-semibold mt-3 inline-block">Nursery</span>
                        <p class="text-sm mt-2 font-light">We are the experts in small oyster spat husbandry, via 40+ years of development and learnings.</p>
                    </div>
                </div>
                <div class="flex how-we-process-container relative right">
                    <div class="how-we-process relative inline-block p-4 rounded-lg bg-gray-800 w-[360px]">
                        <span class="font-bold text-lg">05.</span>
                        <img src="{{Vite::asset('resources/images/front/process-5.png')}}" alt="process one" class="h-[140px] w-[240px] object-contain object-center mx-auto">
                        <span class="text-lg font-semibold mt-3 inline-block">Growout</span>
                        <p class="text-sm mt-2 font-light">With fully organic practices, our oysters grow in some of the most wild and unruly environments on the planet.</p>
                    </div>
                    <div class="flex-1"></div>
                </div>
                <div class="flex how-we-process-container relative">
                    <div class="flex-1"></div>
                    <div class="how-we-process relative inline-block p-4 rounded-lg bg-gray-800 w-[360px]">
                        <span class="font-bold">06.</span>
                        <img src="{{Vite::asset('resources/images/front/process-6.png')}}" alt="process one" class="h-[140px] w-[240px] object-contain object-center mx-auto">
                        <span class="text-lg font-semibold mt-3 inline-block">Harvest</span>
                        <p class="text-sm mt-2 font-light">Culminating in a premium harvest grade oyster for you to enjoy!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script>
        $(document).ready(function (){
            $('.how-we-process-container').each(function (index,element){
                let nextEl = $(element).next();
                let height = $(nextEl).height();
                $(element).css('--after-height', height/2 + 'px');
            })
        })
    </script>
@endpush