@push('styles')
    <style>
        .how-we-process-container:not(:last-child):after{
            position: absolute;
            height: var(--after-height);
            width: calc(100% - 180px - 360px);
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
        @media (min-width: 768px) {
            .how-we-process-container:not(:last-child):after {
                content: "";
            }
        }
    </style>
@endpush
<div class="how-we-process-section text-white overflow-x-hidden">
    <h2 class="section-title text-center" data-aos="fade-up" data-aos-duration="1800">Our Oysters Journey</h2>
    <div class="flex how-we-process-container py-4 lg:py-0 relative right" data-aos="fade-right" data-aos-duration="2000">
        <div class="how-we-process relative inline-block p-4 rounded-lg bg-gray-800 w-[360px]">
            <span class="font-bold text-lg">01.</span>
            <img src="{{Vite::asset('resources/images/front/process-1.png')}}" alt="process one" class="h-[140px] w-[240px] object-contain object-center mx-auto">
            <span class="text-lg font-semibold mt-3 inline-block">Algae Production</span>
            <p class="text-sm mt-2 font-light">Algae is produced to feed the oyster spat.</p>
        </div>
        <div class="flex-1"></div>
    </div>
    <div class="flex how-we-process-container py-4 lg:py-0 relative left" data-aos="fade-left" data-aos-duration="2000">
        <div class="flex-1"></div>
        <div class="how-we-process relative inline-block p-4 rounded-lg bg-gray-800 w-[360px]">
            <span class="font-bold text-lg">02.</span>
            <img src="{{Vite::asset('resources/images/front/process-2.png')}}" alt="process one" class="h-[140px] w-[240px] object-contain object-center mx-auto">
            <span class="text-lg font-semibold mt-3 inline-block">Spawning</span>
            <p class="text-sm mt-2 font-light">Our skilled technicians produce baby oysters (spat)</p>
        </div>
    </div>
    <div class="flex how-we-process-container py-4 lg:py-0 relative right" data-aos="fade-right" data-aos-duration="2000">
        <div class="how-we-process relative inline-block p-4 rounded-lg bg-gray-800 w-[360px]">
            <span class="font-bold text-lg">03.</span>
            <img src="{{Vite::asset('resources/images/front/process-3.png')}}" alt="process one" class="h-[140px] w-[240px] object-contain object-center mx-auto">
            <span class="text-lg font-semibold mt-3 inline-block">Hatchery</span>
            <p class="text-sm mt-2 font-light">The baby oysters cared for 7 days a week, growing to 2mm in size.</p>
        </div>
        <div class="flex-1"></div>
    </div>
    <div class="flex how-we-process-container py-4 lg:py-0 relative left" data-aos="fade-left" data-aos-duration="2000">
        <div class="flex-1"></div>
        <div class="how-we-process relative inline-block p-4 rounded-lg bg-gray-800 w-[360px]">
            <span class="font-bold text-lg">04.</span>
            <img src="{{Vite::asset('resources/images/front/process-4.png')}}" alt="process one" class="h-[140px] w-[240px] object-contain object-center mx-auto">
            <span class="text-lg font-semibold mt-3 inline-block">Nursery</span>
            <p class="text-sm mt-2 font-light">We are the experts in small oyster spat husbandry, via 40+ years of development and learnings.</p>
        </div>
    </div>
    <div class="flex how-we-process-container py-4 lg:py-0 relative right" data-aos="fade-right" data-aos-duration="2000">
        <div class="how-we-process relative inline-block p-4 rounded-lg bg-gray-800 w-[360px]">
            <span class="font-bold text-lg">05.</span>
            <img src="{{Vite::asset('resources/images/front/process-5.png')}}" alt="process one" class="h-[140px] w-[240px] object-contain object-center mx-auto">
            <span class="text-lg font-semibold mt-3 inline-block">Growout</span>
            <p class="text-sm mt-2 font-light">With fully organic practices, our oysters grow in some of the most wild and unruly environments on the planet.</p>
        </div>
        <div class="flex-1"></div>
    </div>
    <div class="flex how-we-process-container py-4 lg:py-0 relative" data-aos="fade-left" data-aos-duration="2000">
        <div class="flex-1"></div>
        <div class="how-we-process relative inline-block p-4 rounded-lg bg-gray-800 w-[360px]">
            <span class="font-bold">06.</span>
            <img src="{{Vite::asset('resources/images/front/process-6.png')}}" alt="process one" class="h-[140px] w-[240px] object-contain object-center mx-auto">
            <span class="text-lg font-semibold mt-3 inline-block">Harvest</span>
            <p class="text-sm mt-2 font-light">Culminating in a premium harvest grade oyster for you to enjoy!</p>
        </div>
    </div>
</div>
@push('scripts')
    <script>
        $(document).ready(function () {
            $('.how-we-process-container').each(function (index, element) {
                let nextEl = $(element).next();
                let height = $(nextEl).height();
                $(element).css('--after-height', height / 2 + 'px');
            });
        });
    </script>
@endpush